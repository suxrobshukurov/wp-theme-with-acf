<?php
/*
Plugin Name: ACF for AMP
Plugin URI: https://ampforwp.com/acf-amp/
Description: Advanced Custom Feilds Support for AMP
Version: 2.8.9
Author: Mohammed Kaludi
Author URI: https://ampforwp.com/
Donate link: https://www.paypal.me/Kaludi/25
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! defined( 'ACF_FOR_AMP_VERSION' ) ) {
    define( 'ACF_FOR_AMP_VERSION', '2.8.9' );
}
// this is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
define( 'ACF_FOR_AMP_STORE_URL', 'https://accounts.ampforwp.com/' ); // you should use your own CONSTANT name, and be sure to replace it throughout this file

// the name of your product. This should match the download name in EDD exactly
define( 'ACF_FOR_AMP_ITEM_NAME', 'ACF for AMP' );

// the download ID. This is the ID of your product in EDD and should match the download ID visible in your Downloads list (see example below)
//define( 'AMPFORWP_ITEM_ID', 2502 );
// the name of the settings page for the license input to be displayed
define( 'ACF_FOR_AMP_LICENSE_PAGE', 'acf-for-amp-license' );

if(! defined('AMP_ACF_ITEM_FOLDER_NAME')){
    $folderName = basename(__DIR__);
    define( 'AMP_ACF_ITEM_FOLDER_NAME', $folderName );
}


// Include Meta Select metabox file 
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . '/metabox.php' );



add_action( 'init', 'amp_acf_create_post_type' );
function amp_acf_create_post_type() {
  register_post_type( 'amp_acf',
    array(
      'labels' => array(
          'name'          => esc_attr__( 'AMP ACF', 'amp-acf' ),
          'singular_name' => esc_attr__( 'AMP ACF', 'amp-acf' )
      ),
        'public'                => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type' => 'amp_acf',
        'capabilities' => array(
            'publish_posts' => 'publish_amp_acfs',
            'edit_posts' => 'edit_amp_acfs',
            'edit_others_posts' => 'edit_others_amp_acfs',
            'read_private_posts' => 'read_private_amp_acfs',
            'edit_post' => 'edit_amp_acf',
            'read_post' => 'read_amp_acf',
            'delete_post' => 'delete_amp_acf',
        ),
        'supports'              => array('title')
    )
  );
}

add_action('admin_init', 'acf_cap_def_roles');
function acf_cap_def_roles(){
    $acf_role = get_role('administrator');
    $acf_role->add_cap('publish_amp_acfs');
    $acf_role->add_cap('edit_amp_acfs');
    $acf_role->add_cap('edit_others_amp_acfs');
    $acf_role->add_cap('read_private_amp_acfs');
    $acf_role->add_cap('edit_amp_acf');
    $acf_role->add_cap('read_amp_acf');
    $acf_role->add_cap('delete_amp_acf');
}

if(is_admin()){
add_action('wp_loaded', 'duplicate_page_admin_content_filter', 999);
}

function duplicate_page_admin_content_filter(){ 
  ob_start('acf_edit_page_content_filter'); 
}

function acf_edit_page_content_filter( $content_buffer ) {

if(preg_match('/pagenow(.*?)amp_acf/', $content_buffer)){
  $content_buffer  = preg_replace('/<div id="major-publishing-actions">(.*?)<\/div>(.*?)<\/div>/', '', $content_buffer);
}
return  $content_buffer;
}

function remove_post_custom_fields() {
  remove_meta_box( 'review_overall_rating' , 'amp_acf' , 'side' ); 
  remove_meta_box( 'ampforwp_title_meta' , 'amp_acf' , 'side' ); 
  remove_meta_box( 'wpseo_meta' , 'amp_acf' , 'normal' ); 
}
add_action( 'do_meta_boxes' , 'remove_post_custom_fields' );



add_action( 'admin_enqueue_scripts', 'amp_acf_style_script_include' );
 
function amp_acf_style_script_include( $hook ) {
    // Admin Style
      wp_enqueue_style('amp-acf-admin', plugin_dir_url(__FILE__) . 'assets/css/admin-style.css');
 
      wp_enqueue_script( 'ace_code_highlighter_js', plugin_dir_url(__FILE__) . 'editor/ace.js', '', '1.0.0', true );
      wp_enqueue_script( 'ace_mode_js', plugin_dir_url(__FILE__) . 'editor/worker-php.js', array( 'ace_code_highlighter_js' ), '1.0.0', true );
      wp_enqueue_script( 'custom_css_js', plugin_dir_url(__FILE__) . 'editor/custom-css.js', array( 'jquery', 'ace_code_highlighter_js' ), '1.0.0', true );
      wp_enqueue_script( 'field-creator', plugin_dir_url(__FILE__) . 'assets/js/field-creator.js', array( 'jquery'), '1.0.0', true );

    // Register the script
    wp_register_script( 'amp_acf_field', plugin_dir_url(__FILE__) . 'assets/js/field-creator.js');

    // Localize the script with new data
    $data_array = array(
        'ajax_url'    =>  admin_url( 'admin-ajax.php' ) 
    );
    wp_localize_script( 'amp_acf_field', 'amp_acf_field_data', $data_array );

    // Enqueued script with localized data.
    wp_enqueue_script( 'amp_acf_field' );

    // Enqueue Shortcode Metabox Show/hide jquery
     wp_enqueue_media(); 
}


// Including files
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . '/ajax-select-generator.php' ); 
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . '/amp-logic.php' ); 
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . '/debug.php' );
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . '/editor-meta.php' );


// Generate Proper post types for select and to add data.
add_action('wp_loaded', 'amp_acf_post_type_generator');
 
function amp_acf_post_type_generator(){

    $post_types = '';
    $post_types = get_post_types( array( 'public' => true ), 'names' );

    // Remove Unsupported Post types
    unset($post_types['attachment'], $post_types['amp_acf']);

    return $post_types;
}



// Generate Proper Post Taxonomy for select and to add data.
function amp_acf_post_taxonomy_generator(){
    $taxonomies = '';  
    $choices    = array();
      $taxonomies = get_taxonomies( array('public' => true), 'objects' );

      foreach($taxonomies as $taxonomy) {
        $choices[ $taxonomy->name ] = $taxonomy->labels->name;
      }

      // unset post_format (why is this a public taxonomy?)
      if( isset($choices['post_format']) ) {
        unset( $choices['post_format']) ;
      }

    return $choices;
}


// Code inserter in proper postition
add_action('pre_amp_render_post','amp_acf_code_position_handler');
function amp_acf_code_position_handler(){
    //Get All POSTs id by post_type
    $post_idArray = amp_acf_get_all_post_id();
    if(count($post_idArray)>0){
      foreach ($post_idArray as $key => $post_id) {
        $getAlldata = generate_the_field_data( $post_id );
        if($getAlldata){
            foreach ($getAlldata as $simpledata){
                if($simpledata[0] == 1){
                    $position_selector  = get_post_meta( $post_id, 'position_selector', true);  
                    $position_hook      = get_post_meta( $post_id, 'position_hook', true);  
                    if ( $position_selector === 'single') {
                        $position = is_singular();
                    }
                    if ( $position_selector === 'global') {
                        $position = true;
                    }
                    if ( $position_selector === 'homepage') {
                        $position = is_home() || is_front_page();
                    }
                    if ( $position_selector === 'archive') {
                        $position = is_archive();
                    }
                    if(function_exists('ampforwp_is_front_page') && ampforwp_is_front_page()){
                        $position = ampforwp_is_front_page();
                    }
                    if($position){
                        add_action('amp_post_template_head', function() use ($post_id){
                            run_the_code_V2($post_id,'script');
                        });
                    }
                    if ( $position && $position_hook) {
                        if ( function_exists('ampforwp_get_setting') && 4 != ampforwp_get_setting('amp-design-selector') ) {
                            if ( $position_selector == 'homepage' && $position == 1 && 
                                $position_hook == 'ampforwp_before_post_content' ) {
                                $position_hook = 'ampforwp_frontpage_above_loop';
                            }
                        }
                        add_action( $position_hook ,function() use ($post_id){
                            run_the_code_V2($post_id);
                        });         
                    }
                }
            }
        }
      }
    }
        
  // position_selector
}
//Advance Custom Field Pro Compatibility using acf/validate_post_id filter
add_action('pre_amp_render_post' ,'ampforwp_acf_content_render' );
function ampforwp_acf_content_render(){
 if( ( function_exists('ampforwp_is_amp_endpoint')  && ampforwp_is_amp_endpoint() ) || ( function_exists('is_amp_endpoint')  && is_amp_endpoint() ) ) {
    add_filter('acf/validate_post_id','ampforwp_modify_post_id'); 
  }
}
function ampforwp_modify_post_id($post_id){
  if( ampforwp_is_front_page()){
    global $redux_builder_amp;
    //$post_id =$redux_builder_amp['amp-frontpage-select-option-pages'];
    $post_id = get_the_ID();
  }
    return $post_id;
}

//FrontEnd
function amp_get_all_acf_posts(){
    $post_idArray = amp_acf_get_all_post_id();
    $unique_checker = '';
    if(count($post_idArray)>0){    
      $returnData = array();
      foreach ($post_idArray as $key => $post_id){
            $dataAll = generate_the_field_data( $post_id );
            
            if($dataAll){  
                $condition_array = array();    
                foreach ($dataAll as $result){
                    if(is_array($result)){
                        $data = array_filter($result);

                        $number_of_fields = count($data);
                        $checker = 0;

                        // Check if we have more then 1 fields.
                        if ( $number_of_fields > 0 ) {
                            $checker = count( array_unique($data) );
                            $array_is_false =  in_array(false, $result);
                            if (  $array_is_false ) {
                                $checker = 0;
                            }
                        }
                        $condition_array[] = $checker;
                    }
                }
            $unique_checker = in_array(true,$condition_array);              
          }else{
            $unique_checker ='notset';    
          }
          
        if( $unique_checker === 1||$unique_checker === true||$unique_checker == 'notset'){
            $conditions = array();
            $data_in_array = get_post_meta( $post_id, 'data_in_array', true);
            $amp_php_content = get_post_meta( $post_id, 'ampforwp_php_content', true);  
            $returnData[] = array(
                'acf_content' => $amp_php_content,
                'post_id' => $post_id
                );
            }
        }//foreach closed post_idArray
      
      return $returnData;
    }//iF Closed post_idArray
   return false;
}

// Version 2 code to insert ACF data
function run_the_code_V2($post_id, $type=''){
    $data           = '';
    $unique_checker = '';
    $data = amp_get_all_acf_posts();
    if($data){
        foreach ($data as $key) {
            if( $key['post_id'] == $post_id ){
                if($type=='script'){
                    $amp_scripts = get_post_meta($post_id, 'amp_scripts', true);
                    echo $amp_scripts;
                }else{
                    ob_start();
                    get_php_editor_data($post_id);
                    $amp_php_editor_content = ob_get_contents();
                    ob_clean();
                    $amp_scode_check = get_post_meta( $post_id, 'ampforwp_scode_php', true);
                    if(class_exists('AMPFORWP_Content') && $amp_scode_check){
                      $sanitizer_obj = new AMPFORWP_Content( $amp_php_editor_content,
                                        array(), 
                                        apply_filters( 'amp_content_sanitizers', 
                                            array( 'AMP_Img_Sanitizer' => array(), 
                                                'AMP_Blacklist_Sanitizer' => array(),
                                                'AMP_Style_Sanitizer' => array(), 
                                                'AMP_Video_Sanitizer' => array(),
                                                'AMP_Audio_Sanitizer' => array(),
                                                'AMP_Iframe_Sanitizer' => array(
                                                     'add_placeholder' => true,
                                                 ),
                                            ) 
                                        ) 
                                    );

                    $amp_sanitized_editor_content = $sanitizer_obj->get_amp_content();
                    echo $amp_sanitized_editor_content;
                    }else{
                        echo get_php_editor_data($post_id);
                    }
                }
            }
        }
    }  
}

function generate_the_field_data($post_id){
    $conditions = get_post_meta( $post_id, 'data_in_array', true);  
    $output = array();
    if ( $conditions ) {
        foreach ($conditions as $curr_grp){
            if(isset($curr_grp['data_array'])){
                $output[] = array_map('amp_acf_comparison_logic_checker', $curr_grp['data_array']); 
            }
        }
    }
    return $output;
}

// Shortcode feature added.
add_shortcode('amp-acf', 'get_amp_acf_markup');
 function get_amp_acf_markup($post_id) {
  $shortcode_content = '';
  ob_start();   
    get_php_editor_data($post_id['id']);
    $shortcode_content = ob_get_contents();
  ob_end_clean();
  $endpoint_check = function_exists('is_amp_endpoint' ) ? is_amp_endpoint():'';
      if ( $endpoint_check ) {
   return  $shortcode_content;
   }
  }
/* 
 * amp_acf_field_checker function takes all logics selected in dropdown in Field Generator,
 * and checks it with amp_acf_comparison_logic_checker function and generates
 * proper true or false value, depending on the user and post.
 * 
*/

function amp_acf_get_all_post_id() {
  $query = new WP_Query(array(
        'post_type' => 'amp_acf',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ));
    while ($query->have_posts()) {
        $query->the_post();
        $post_id[] = get_the_ID();
    }
    wp_reset_query();
    wp_reset_postdata();
    if(!isset($post_id)){
      $post_id = array();
    }
    return $post_id;
}
require_once dirname( __FILE__ ) . '/updater/EDD_SL_Plugin_Updater.php';

// Check for updates
function amp_acf_plugin_updater() {

    // retrieve our license key from the DB
    //$license_key = trim( get_option( 'amp_ads_license_key' ) );
    $selectedOption = get_option('redux_builder_amp',true);
    $license_key = '';//trim( get_option( 'amp_ads_license_key' ) );
    $pluginItemName = '';
    $pluginItemStoreUrl = '';
    $pluginstatus = '';
    if( isset($selectedOption['amp-license']) && "" != $selectedOption['amp-license'] && isset($selectedOption['amp-license'][AMP_ACF_ITEM_FOLDER_NAME])){

       $pluginsDetail = $selectedOption['amp-license'][AMP_ACF_ITEM_FOLDER_NAME];
       $license_key = $pluginsDetail['license'];
       if(isset($pluginsDetail['item_name'])){
       $pluginItemName = $pluginsDetail['item_name'];
       }
       $pluginItemStoreUrl = $pluginsDetail['store_url'];
       $pluginstatus = $pluginsDetail['status'];
    }
    
    // setup the updater
    $edd_updater = new ACF_FOR_AMP_EDD_SL_Plugin_Updater( ACF_FOR_AMP_STORE_URL, __FILE__, array(
            'version'   => ACF_FOR_AMP_VERSION,                // current version number
            'license'   => $license_key,                        // license key (used get_option above to retrieve from DB)
            'license_status'=>$pluginstatus,
            'item_name' => ACF_FOR_AMP_ITEM_NAME,          // name of this plugin
            'author'    => 'Mohammed Kaludi',                   // author of this plugin
            'beta'      => false,
        )
    );
}
add_action( 'admin_init', 'amp_acf_plugin_updater', 0 );

// Notice to enter license key once activate the plugin

$path = plugin_basename( __FILE__ );
    add_action("after_plugin_row_{$path}", function( $plugin_file, $plugin_data, $status ) {
        global $redux_builder_amp;
         if(! defined('AMP_ACF_ITEM_FOLDER_NAME')){
        
           $folderName = basename(__DIR__);
           define( 'AMP_ACF_ITEM_FOLDER_NAME', $folderName );
        }
          $pluginstatus = '';
        if(isset($redux_builder_amp['amp-license'][AMP_ACF_ITEM_FOLDER_NAME]))
        {
        $pluginsDetail = $redux_builder_amp['amp-license'][AMP_ACF_ITEM_FOLDER_NAME];
        $pluginstatus = $pluginsDetail['status'];
        }
        if(empty($redux_builder_amp['amp-license'][AMP_ACF_ITEM_FOLDER_NAME]['license'])){
            echo "<tr class='active'><td>&nbsp;</td><td colspan='2'><a href='".esc_url(  self_admin_url( 'admin.php?page=amp_options&tabid=opt-go-premium' )  )."'>Please enter the license key</a> to get the <strong>latest features</strong> and <strong>stable updates</strong></td></tr>";
                 }elseif($pluginstatus=="valid"){
                $update_cache = get_site_transient( 'update_plugins' );
            $update_cache = is_object( $update_cache ) ? $update_cache : new stdClass();
            if(isset($update_cache->response[ AMP_ACF_ITEM_FOLDER_NAME ]) 
                && empty($update_cache->response[ AMP_ACF_ITEM_FOLDER_NAME ]->download_link) 
              ){
               unset($update_cache->response[ AMP_ACF_ITEM_FOLDER_NAME ]);
            set_site_transient( 'update_plugins', $update_cache );
            }
            
        }
    }, 10, 3 );