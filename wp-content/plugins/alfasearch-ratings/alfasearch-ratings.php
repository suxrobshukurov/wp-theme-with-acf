<?php
/*
 * Plugin Name: Alfasearch ratings
 * Plugin URI:  dev2.turkiyenin-bahisleri2.com
 * Description: Creation of rating pages for Wordpress from team Alfasearch 
 * Version: 1.1.1
 * Author: Alina Smirnova
 * Author URI: 
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: ratings
 * Domain Path: /languages
 *
 * Network: true
 */


 // Добавляем меню

function ratings_menu() {

    add_menu_page("Alfasearch ratings", "Рейтинги Alfasearch", "manage_options", "create_ratings", "alfa_main", "dashicons-star-filled");
	
}

add_action("admin_menu", "ratings_menu");

// ACTIONS

function alfa_main()
{
  include_once "includes/main.php";
}

// CSS and JS

add_action( 'admin_init','cs_css_js');

function cs_css_js() {
    wp_register_style( 'cs-css', plugins_url('/css/style.css', __FILE__) );
    wp_enqueue_style( 'cs-css' );
    wp_enqueue_script( 'cs-js', plugins_url('/js/index.js', __FILE__), array( 'jquery' ) );
    wp_enqueue_style( 'cs-js' ) ;
    wp_enqueue_script( 'app-js', plugins_url('/js/app.js', __FILE__));
    wp_enqueue_style( 'app-js' );
	wp_enqueue_script( 'jquery-ui-sortable' );
}

// Get bookmakers

function get_slot_list() {
    global $post;

    $params = array(
        'post_type' => 'post',
        'category_name' => 'slot',
    );
    $posts_Query = new WP_Query($params);
    if ($posts_Query->have_posts()) {
        echo '<ul class="all_bookmakers">';

        while($posts_Query->have_posts()) {
            $posts_Query->the_post();
            $itemField = get_field('slot-data');

            echo '<li class="" id="post-'. $post->ID  .'" data-id="'.  $post->ID .'">
                    <span>'. $post->post_title . $itemField['rating'] . '</span>
                    <div class="input"></div>
                </li>';
        }

        echo '</ul>';
    }
    wp_reset_postdata();
}

function get_casino_list() {
    global $post;

    $params = array(
        'post_type' => 'post',
        'category_name' => 'casino',
    );
    $posts_Query = new WP_Query($params);
    if ($posts_Query->have_posts()) {
        echo '<ul class="all_bookmakers">';

        while($posts_Query->have_posts()) {
            $posts_Query->the_post();
            $itemField = get_field('casino-data');

            echo '<li class="" id="post-'. $post->ID  .'" data-id="'.  $post->ID .'">
                    <span>'. $post->post_title . $itemField['rating'] . '</span>
                    <div class="input"></div>
                </li>';
        }

        echo '</ul>';
    }
    wp_reset_postdata();
}

function get_news_list() {
    global $post;

    $params = array(
        'post_type' => 'post',
        'category_name' => 'news',
    );
    $posts_Query = new WP_Query($params);
    if ($posts_Query->have_posts()) {
        echo '<ul class="all_bookmakers">';

        while($posts_Query->have_posts()) {
            $posts_Query->the_post();
            $itemField = get_field('news-data');

            echo '<li class="" id="post-'. $post->ID  .'" data-id="'.  $post->ID .'">
                    <span>'. $post->post_title . '</span>
                    <div class="input"></div>
                </li>';
        }

        echo '</ul>';
    }
    wp_reset_postdata();
}


function get_bookmakers_list(){
	
	$args = array(
		'post_type' => 'post',
		'numberposts' => '-1',
		'category' => 1,
		'orderby' => array(
			'meta_value_num' => 'DESC', 
			'menu_order' => 'ASC' 
		),
		/* 'meta_query' => array(
		  array(
			'key' => $type,
			'value' => 0,
			'compare' => '>'
		  )
		)   */
	  );
	  
	$all_bookmakers = get_posts($args);  
	
	
	echo '<ul class="all_bookmakers">';
	
		foreach( $all_bookmakers as $bookmaker ):
	
			$id = $bookmaker->ID;
			$title = $bookmaker->post_title;

			echo '<li class="bookmaker_item" id="post-'. $id  .'" data-id="'. $id .'">
			<span>'. $title .'</span>
			<div class="input"><input value="' .'"></div>
			</li>';
		
		endforeach;
		
	echo '</ul>';	
		
		
		
}


//////// GET SUBFIELDS FOR FIELD GROUP

function get_sub_fields(){
	
	$args = array(
		'post_type' => 'acf-field',
		'post_parent' => 124,
		'numberposts' => '-1',
		'order' => 'ASC'
	);
	
	$fields = get_posts($args);
	
	foreach( $fields as $field ):
	
		echo '<option value="'. $field->post_excerpt .'" class="hide-if-no-js">'. $field->post_title .'</option>';
	
	endforeach;
	

}



// AJAX



//////// GET RATINGS BY NEW TYPE

function renew_ratings(){
	
	$indicator = $_REQUEST['value'];
	
	get_bookmakers_list($indicator) ;  //ответ с сервера
	die();	
}

add_action('wp_ajax_nopriv_ajax_rating', 'renew_ratings' );
add_action('wp_ajax_ajax_rating', 'renew_ratings' );

//////// RENEW ONE RATING

function renew_rating(){
	
	$name_rating = $_REQUEST['parameter_value'];
	$type_rating = $_REQUEST['type_value'];
	$id_rating = $_REQUEST['id_value'];
	
	update_field( $type_rating, $name_rating, $id_rating );
	
	echo $name_rating . ' ' . $type_rating . ' ' .  $id_rating;
	
	die();	
}

add_action('wp_ajax_nopriv_ajax_renew', 'renew_rating' );
add_action('wp_ajax_ajax_renew', 'renew_rating' );


//////// UPDATING BOOKMAKERS ORDER

function update_order(){
	
	global $wpdb;
	
	parse_str($_REQUEST['order'], $data);
	
	if (!is_array($data) ||  count($data) <   1) die();
		
	//get a list of all objects
    
	$query = "SELECT ID FROM ". $wpdb->posts ." 
    WHERE post_type = 'page' AND post_status IN ('publish', 'pending', 'draft', 'private', 'future', 'inherit')
	AND post_parent = 0
    ORDER BY menu_order, post_date DESC";
    
	$results = $wpdb->get_results($query);
		
	//create the list of ID's
    
	$objects_ids = array();
	foreach($results as $result) {
        $objects_ids[]  =  (int)$result->ID;   
    }
 
    $index = 0;
    
	for($i = 0; $i < 50; $i++) {
        
		if(!isset($objects_ids[$i])) break;
                                
        $objects_ids[$i] = (int)$data['post'][$index];
        $index++;
    
	}
	
	// echo '<pre>';
	// print_r($objects_ids);
	// echo '</pre>';
	
	//update the menu_order within database
    foreach( $objects_ids as $menu_order => $id ) {
        
		$values = array('menu_order' => $menu_order);
		//var_dump( $values );

        $wpdb->update( $wpdb->posts, $values, array('ID' => $id) );
                            
        clean_post_cache( $id );
    }
                        
    //trigger action completed
    //do_action('alfasearch_order_update_complete');
	
	die();

}

add_action('wp_ajax_nopriv_ajax_order', 'update_order' );
add_action('wp_ajax_ajax_order', 'update_order' );
