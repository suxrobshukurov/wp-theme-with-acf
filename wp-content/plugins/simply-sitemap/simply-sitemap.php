<?php
/*
Plugin Name: Simply Sitemap
Plugin URI:  https://github.com/jollygoodtime/simplysitemap
Description: Display Html Sitemaps
Version: 1.2.0
Author: jollygoodtime
Author URI: https://github.com/jollygoodtime/
Text Domain: simply-sitemap
License: GPLv3 or later
*/
if (!defined('ABSPATH'))
{
	exit;
}

define('SITEMAP_FILE_NAME', ABSPATH.'sitemap.xml');

function simply_sitemap_cat($categoryid = 0, $returnhtml = null) {
	
	$categories = get_categories ( 'parent=' . $categoryid );

	if ( (is_array($categories)) &&  (count ( $categories ) > 0)) 
	{
		foreach ( $categories as $categorie_single ) {
			
			if ($categorie_single->category_parent > 0) {
				$returnhtml .= "<div class='child-category'>" . $categorie_single->name . " " . "</div>";
			} else {
				$returnhtml .= "<div class='top-category'>" . $categorie_single->name . " " . "</div>";
			}
			
			$returnhtml .= "<ul class='ul-posts-cat'>";
			$categorie_single_id = $categorie_single->term_id;
			$posts = get_posts ( "posts_per_page=-1&category__in=$categorie_single_id");
			
			if ( (is_array($posts)) &&  (count ( $posts ) > 0)) 
			{
				foreach ( $posts as $post_single ) {
					$postlink = get_permalink ( $post_single->ID );
					$posttitle = $post_single->post_title;
					$returnhtml .= '<li  class="single-page-post">';
					$returnhtml .= "<a href='$postlink'>$posttitle</a>";
					$returnhtml .= "</li>";
				}
			}
			$returnhtml = simply_sitemap_cat ( $categorie_single->term_id, $returnhtml );
			$returnhtml .= "</ul>";
		}
	}
	
	return $returnhtml;
}

function simply_sitemap() {
	$returnhtml = '';
	$returnhtml .= simply_sitemap_cat ( 0, $returnhtml );
	$returnhtml .= "<ul class='ul-pages'>";
	$pageargs = [];
	$pageargs['$sort_order'] = 'ASC';
	$pageargs['post_status'] = 'publish';
	$alpages = get_pages($pageargs);
	foreach ( $alpages as $page_single ) 
	{
		$pagelink = get_permalink ( $page_single->ID );
		$returnhtml .= "<li class='single-page-post'><a href='$pagelink'>$page_single->post_title</a></li>";
	}
	$returnhtml .= "</ul>";
	 return $returnhtml;
}

add_shortcode ( 'sitemappage', 'simply_sitemap' );

function generate_google_sitemap_xml()
{
	global $wpdb;
	$post_type = "'post','page'";
	$sql = "SELECT ID, post_title, post_modified FROM $wpdb->posts WHERE post_type IN ($post_type) AND post_status='publish'";
	$results = $wpdb->get_results( $sql );
	$sitemap_content = '';
	$sitemap_file_name = ABSPATH.'sitemap.xml';
	
	if ((!(empty($results))) && (is_array($results)) && (count($results) > 0)  )
	{
		foreach ($results as $single)
		{
			$sitemap_url = get_permalink($single->ID);
			$sitemap_modify = $single->post_modified;			
			$sitemap_content.='<url>'.
				'<loc>'.$sitemap_url.'</loc>
				<lastmod>'.$sitemap_modify.'</lastmod>
			</url>';
		}
	}
	
	if (!(empty($sitemap_content)))
	{
		$sitemap_head = '<?xml version="1.0" encoding="UTF-8"?>';
		$sitemap_schema_head = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
		
		$sitemap_schema_tail = '</urlset>';
		$sitemap_content = $sitemap_head.$sitemap_schema_head.$sitemap_content.$sitemap_schema_tail;
		
		$f = fopen( $sitemap_file_name, 'w' );
		if ( false === $f ) {
			return new WP_Error( 'file_not_writable' );
		}
		
		$written = fwrite( $f, $sitemap_content );
		fclose( $f );
		
	}
	
	return $sitemap_content;

	
}

function generate_first_sitemap_xml()
{
	if (!(file_exists(SITEMAP_FILE_NAME)))
	{
		generate_google_sitemap_xml();
	}
}


add_action( 'save_post', 'generate_google_sitemap_xml' );
add_action( 'delete_post', 'generate_google_sitemap_xml' );
add_action( 'init', 'generate_first_sitemap_xml' );

