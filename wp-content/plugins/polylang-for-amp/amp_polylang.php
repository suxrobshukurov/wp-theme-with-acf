<?php
/**
Plugin Name: Polylang For AMP
Plugin URI: https://ampforwp.com/polylang-for-amp/
Description: Polylang For AMP - Accelerated Mobile Pages for Polylang Support
Version: 1.2.7
Author: Ahmed Kaludi, Mohammed Kaludi
Author URI: https://ampforwp.com/
Donate link: https://www.paypal.me/Kaludi/25
License: GPL2+
Text Domain: accelerated-mobile-pages-polylang-support
 */



define('AMPFORWP_POLYLANG_SUPPORT_PLUGIN_DIR', plugin_dir_path( __FILE__ ));

require_once AMPFORWP_POLYLANG_SUPPORT_PLUGIN_DIR.'admin_side/admin_operation.php';
require_once AMPFORWP_POLYLANG_SUPPORT_PLUGIN_DIR.'view_options/view_operaton.php';

if ( ! defined( 'AMP_POLYLANG_VERSION' ) ) {
	define( 'AMP_POLYLANG_VERSION', '1.2.7' );
}
define( 'AMP_POLYLANG_STORE_URL', 'https://accounts.ampforwp.com' ); 
define( 'AMP_POLYLANG_ITEM_NAME', 'Polylang For AMP' );
define( 'AMP_POLYLANG_LICENSE_PAGE', 'polylang-for-amp' );
define( 'AMP_POLYLANG_DIR', plugin_dir_url(__FILE__) );

if(! defined('AMP_POLYLANG_ITEM_FOLDER_NAME')){
    $folderName = basename(__DIR__);
    define( 'AMP_POLYLANG_ITEM_FOLDER_NAME', $folderName );
}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( (is_plugin_active( 'polylang/polylang.php' ) || is_plugin_active( 'polylang-pro/polylang.php' )) && (function_exists('get_option') &&'page' === get_option( 'show_on_front' )) ){
 add_filter( 'redux/options/redux_builder_amp/sections', 'amp_settings_front_page_note' );
}

function amp_settings_front_page_note( $sections) {

  $opt_name = 'redux_builder_amp';   
  $cust_frnt_page_note = array(
                       'section_id' => 'opt-text-subsection',
                       'id' => 'cust_frnt_page_polylang',
                       'type' => 'info',
                       //'class' => 'child_opt child_opt_arrow',
                       'desc' =>"<div style='background: #FFF9C4;padding: 12px;line-height: 1.6;margin:-30px -14px -18px -17px;'><span style='color:#303F9F;float:left; margin-right:15px;'> Note: </span>As Polylang plugin is active  default wordpress reading settings will be applied for custom frontpage. <a href=".esc_url(admin_url( 'options-reading.php' ))." target='_self'>Modify reading settings</a></div>",
                         'required' => array('amp-frontpage-select-option', '=' , '1')
                   );

         foreach ($sections as $key => $section_value) {
            if($section_value['id']=='opt-text-subsection'){
               $i=0;
                foreach ($sections[$key]['fields'] as $insert_key => $value) {
                     $i++;
                      if($value['id'] == 'amp-frontpage-select-option-pages' )
                    {
                      unset($sections[$key]['fields'][$insert_key]['type']);
                    }
                    if($value['id'] == 'ampforwp-title-on-front-page' )
                    {
                        $mainArray_key = array_keys($sections[$key]['fields']);
                        $newkey = end($mainArray_key)+1;
                        $mainArray = $sections[$key]['fields'];
                        $sections[$key]['fields'] = array_slice($mainArray, 0, $i, true) +
                            array($newkey=>$cust_frnt_page_note) +
                            array_slice($mainArray, $i, count($sections[$key]['fields'])-1, true) ;
                        break;
                    }
                }
            }
            }
   return $sections;
    }

function pll_amp_hreflang_attribute(){
  $switcher = new PLL_Switcher();
  if(function_exists('PLL')){
  $pl_languages = $switcher->the_languages( PLL()->links, array( 'raw' => 1));
  }
  //print_r($pl_languages);die;
  if(function_exists('ampforwp_is_home') && ampforwp_is_home()){
          foreach ( $pl_languages as $clang) {
                echo '<link rel="alternate" href="'.esc_url(ampforwp_url_controller($clang['url'])) .'" hreflang="'.$clang['slug'].'" />'."\n";   
          }
  }
  ob_start();
  if(function_exists('wp_head')){
      wp_head();
  }
  $amphref = ob_get_contents();
  ob_clean();
  preg_match_all('/<link\srel="alternate"\shref="(.*?)"\shreflang="(.*?)"\s\/>/', $amphref, $matched);
  for ($i=0; $i < count($matched[0]); $i++) {
    if( defined('AMPFORWP_PLUGIN_DIR') && function_exists('ampforwp_url_controller') ){
      echo '<link rel="alternate" href="'.esc_url(ampforwp_url_controller($matched[1][$i])) .'" hreflang="'.$matched[2][$i].'" />'."\n";
    }else{
      if(function_exists('amp_add_paired_endpoint')){
        echo '<link rel="alternate" href="'.esc_url(amp_add_paired_endpoint($matched[1][$i])) .'" hreflang="'.$matched[2][$i].'" />'."\n";
      }else{
        echo '<link rel="alternate" href="'.esc_url($matched[1][$i]) .'" hreflang="'.$matched[2][$i].'" />'."\n";
      }
    }
  }
}
  
if( is_plugin_active( 'polylang/polylang.php' ) || is_plugin_active( 'polylang-pro/polylang.php' ) ){
add_action('amp_post_template_css', 'amp_pll_render_submenu_flags');
add_action( 'amp_post_template_head', 'pll_amp_hreflang_attribute' );
add_filter('ampforwp_modify_rel_url', 'pll_amp_home_canonical');
}
function amp_pll_render_submenu_flags(){

  $switcher = new PLL_Switcher();

  if(function_exists('PLL')){
  $the_languages = $switcher->the_languages( PLL()->links, array( 'raw' => 1));
  }
  if($the_languages == true){
    
  delete_transient('ampforwp_header_menu');

  }
  //print_r($the_languages);die;

  // lets build css
  foreach ($the_languages as $lang => $data) {
    echo ".lang-item-".esc_attr($data['id']).":before {background-image:url(". esc_url($data["flag"])."); content:'';display:inline-block;background-repeat:no-repeat;padding:0px;width: 20px;height: 13px;background-size: 20px;}" ." \n";
    echo ".p-menu .lang-item-".esc_attr($data['id']).":before {margin-bottom: -30px}" ." \n";
    echo ".content-wrapper .p-menu ul li.menu-item-has-children .sub-menu .lang-item-".esc_attr($data['id'])." a {padding-left: 25px;}" ." \n";
    echo ".lang-item-".esc_attr($data['id'])." amp-img {display:none}" ." \n";
  }
  foreach ($the_languages as $lang => $data) {
    //print_r($data);
  if($data["current_lang"] == 1){
  
  echo "header .pll-parent-menu-item:before,.footer .pll-parent-menu-item:before {background-image:url(". esc_url($data["flag"])."); content:'';display:inline-block;background-repeat:no-repeat;padding:0px;width: 20px;height: 13px;background-size: 20px;}" ." \n";

  echo ".p-menu .pll-parent-menu-item:before {background-image:url(". esc_url($data["flag"])."); content:'';display:inline-block;background-repeat:no-repeat;padding:0px;width: 20px;height: 13px;background-size: 20px;margin-bottom: -3px;margin-right: 6px;}" ." \n";
   echo "@media only screen and (min-width:768px){.p-menu .pll-parent-menu-item:before{ margin-right: 10px; } }"." \n";
   echo "@media only screen and (max-width:768px){.p-menu .pll-parent-menu-item:before{ margin-right: 75px; } }"." \n";
   echo ".pll-parent-menu-item  amp-img {display:none}" ." \n";
   echo ".m-menu .a-m >.lang-item:before { position: absolute; z-index: -1; } .m-menu .a-m >.lang-item a { margin: 0; padding: 8px 10px; }";
}
 
}
  if( function_exists('ampforwp_get_setting') && 'css-icons' == ampforwp_get_setting('ampforwp_font_icon')){
    echo '.m-menu .amp-menu .toggle:after {
        content: "▼";
        font-size: 11px;
    }';
  }
}

function pll_amp_home_canonical($pllampcan){
  if(ampforwp_is_home()){
    $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $urlArray = explode('/', $current_link);
    $urlArray = array_filter($urlArray);
    if(end($urlArray) == "amp" || end($urlArray) == "?amp"){
      $pllampcan = dirname($current_link);
    }
  }
  return $pllampcan;
}

//For search form
add_filter('ampforwp_search_form_data','amp_pll_search_form');
function amp_pll_search_form($form){
  if($form && function_exists('PLL')){
      $get_langdata = PLL();
      $new_url = $get_langdata->curlang->search_url;
      $new_url = preg_replace('#^http?:#', '', $new_url);
      $form = preg_replace('/<form\srole="search"\smethod="get"\sclass="amp-search"\starget="_top"\saction=".*?">/', '<form role="search" method="get" class="amp-search" target="_top" action="'.$new_url.'">', $form);
  }
  return $form;
}

add_filter('amp_post_template_css','polylang_for_amp_styles');
function polylang_for_amp_styles() 
            {
        if( function_exists('pll_current_language') ){
            if(pll_current_language() == 'ar' )
              {
        $rtl_custom_css = '
        .sp-rt {direction: rtl;position: relative;right: 285px;}        
        .amp-author-image amp-img {margin: 0px 0px 5px 12px;}         
        .prev:after {left: -25px;right:auto;}
        @media only screen and (min-width:768px){.fbp-img.fbp-c {left: 30px; position: relative; }}  
        .amp-category {float: right;}
        .amp-post-title {direction: rtl;clear: both;}
        ul#breadcrumbs {float: right;top: 2px;position: relative;top: -19px;right: 121px;}
        .amp-category {float: right;}    
        .sp-lt {position: relative;direction: rtl;left: 80%;}
        .r-pf {position: relative;direction: rtl;}
        header .cntr {direction: rtl;}
        .tg:checked + .hamb-mnu > .m-ctr .c-btn {position: relative;float: right;}
        .loop-wrapper {direction: rtl;}
        h3.amp-archive-title {direction: rtl;}
         ';
     echo $rtl_custom_css;
              }
            }  
        }
add_filter('ampforwp_breadcrumbs_home_url','ampforwp_brdcmb_homepage_url_modfn');
function ampforwp_brdcmb_homepage_url_modfn($home_url){
  if( function_exists ('pll_home_url') ){
    if( function_exists ('ampforwp_get_setting') ){
    if ( true == ampforwp_get_setting('ampforwp-homepage-on-off-support') ){
        $home_url = pll_home_url().'amp';
      }
      else{
         $home_url = pll_home_url();
      }
    }
  }  
  return $home_url;
}

// CODE TO ADD LICENSE ACTIVATION FATURE FOR NON AMPFORWP
if(!defined('AMPFORWP_PLUGIN_DIR')){
  $redux_builder_amp = get_option('redux_builder_amp',true);
  add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'ampfowp_polylang_plugin_activation_link' );
  function ampfowp_polylang_plugin_activation_link( $links ) {
      $_link = '<a href="admin.php?page=ampfowp-polylang-license-activation" target="_blank">License Activation</a>';
      $links[] = $_link;
      return $links;
  }
  if(file_exists(ABSPATH . 'wp-admin/includes/plugin.php')){
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    }
  add_action('init', 'ampfowp_polylang_set_extension_license_key_page');
  function ampfowp_polylang_set_extension_license_key_page(){
    require_once(dirname( __FILE__ ) . '/includes/license-activation.php');
    if(function_exists('add_submenu_page')){
      add_submenu_page(
          'License Activation',
          'Polylang for AMP',
          'License Activation',
          'manage_options',
          'ampfowp-polylang-license-activation',
          'ampfowp_polylang_license_activation'
      );
      }
  }
  function ampfowp_polylang_license_activation(){
    require_once(dirname( __FILE__ ) . '/includes/license-activation-view.php');
  }
}

require_once dirname( __FILE__ ) . '/updater/EDD_SL_Plugin_Updater.php';

// Check for updates
function amp_polylang_plugin_updater() {

	// retrieve our license key from the DB
  global $redux_builder_amp;
	$selectedOption = get_option('redux_builder_amp',true);
    $license_key = '';
    $pluginItemName = '';
    $pluginItemStoreUrl = '';
    $pluginstatus = '';
    if( isset($selectedOption['amp-license']) && "" != $selectedOption['amp-license'] && isset($selectedOption['amp-license'][AMP_POLYLANG_ITEM_FOLDER_NAME])){
      $pluginstatus = '';
        if(isset($redux_builder_amp['amp-license'][AMP_POLYLANG_ITEM_FOLDER_NAME]))
        {
        $pluginsDetail = $redux_builder_amp['amp-license'][AMP_POLYLANG_ITEM_FOLDER_NAME];
       $pluginstatus = $pluginsDetail['status'];
       $license_key = $pluginsDetail['license'];
       $pluginItemName = $pluginsDetail['item_name'];
       $pluginItemStoreUrl = $pluginsDetail['store_url'];
    }
	}
	// setup the updater
	$edd_updater = new AMP_POLYLANG_EDD_SL_Plugin_Updater( AMP_POLYLANG_STORE_URL, __FILE__, array(
			'version' 	=> AMP_POLYLANG_VERSION, 				// current version number
			'license' 	=> $license_key, 						// license key (used get_option above to retrieve from DB)
			'license_status'=>$pluginstatus,
			'item_name' => AMP_POLYLANG_ITEM_NAME, 			// name of this plugin
			'author' 	=> 'Mohammed Kaludi',  					// author of this plugin
			'beta'		=> false,
		)
	);
}
add_action( 'admin_init', 'amp_polylang_plugin_updater', 0 );

// Notice to enter license key once activate the plugin

$path = plugin_basename( __FILE__ );
    add_action("after_plugin_row_{$path}", function( $plugin_file, $plugin_data, $status ) {
        global $redux_builder_amp;

        if(! defined('AMP_POLYLANG_ITEM_FOLDER_NAME')){
            $folderName = basename(__DIR__);
            define( 'AMP_POLYLANG_ITEM_FOLDER_NAME', $folderName );
        }
        $pluginstatus = '';
        if(isset($redux_builder_amp['amp-license'][AMP_POLYLANG_ITEM_FOLDER_NAME]))
        {
        $pluginsDetail = $redux_builder_amp['amp-license'][AMP_POLYLANG_ITEM_FOLDER_NAME];
        $pluginstatus = $pluginsDetail['status'];
        }

        if(empty($redux_builder_amp['amp-license'][AMP_POLYLANG_ITEM_FOLDER_NAME]['license'])){
            $key_link = defined('AMPFORWP_PLUGIN_DIR') ? 'amp_options&tabid=opt-go-premium' : 'ampfowp-polylang-license-activation';
            echo "<tr class='active'><td>&nbsp;</td><td colspan='2'><a href='".esc_url(  self_admin_url( 'admin.php?page='.$key_link )  )."'>Please enter the license key</a> to get the <strong>latest features</strong> and <strong>stable updates</strong></td></tr>";
        }elseif($pluginstatus=="valid"){
            $update_cache = get_site_transient( 'update_plugins' );
            $update_cache = is_object( $update_cache ) ? $update_cache : new stdClass();
            if(isset($update_cache->response[ AMP_POLYLANG_ITEM_FOLDER_NAME ]) 
                && empty($update_cache->response[ AMP_POLYLANG_ITEM_FOLDER_NAME ]->download_link) 
              ){
               unset($update_cache->response[ AMP_POLYLANG_ITEM_FOLDER_NAME ]);
            set_site_transient( 'update_plugins', $update_cache );
            }
            
        }
    }, 10, 3 );
