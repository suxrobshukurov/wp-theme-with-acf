<?php

add_action("pll_pre_init", 'poly_archive_url');

function poly_archive_url(){
	add_action( 'parse_query', 'poly_parse_query', 6 );
	add_filter( 'pll_get_archive_url', 'ampforwp_translate_front_Url', 20, 2);
}
function poly_parse_query($query){
    if(!function_exists('ampforwp_is_front_page') || !function_exists('ampforwp_is_home') || !function_exists('ampforwp_is_blog')){
        return ;
    }
	if(!ampforwp_is_front_page() && !ampforwp_is_home() && !ampforwp_is_blog() && !is_singular() && !is_archive()){
		$query->is_home = true;
	}
}
function ampforwp_translate_front_Url($url, $language){
    global $redux_builder_amp;
	$result = $url;
       /* if (!is_post_type_archive()) {
            return $result;
        }*/
        $frontPageCheck = $redux_builder_amp['amp-frontpage-select-option'];
        $frontPageID = $redux_builder_amp['amp-frontpage-select-option-pages'];
        //$shopPageID = get_option('woocommerce_shop_page_id');
        $frontPagePage = get_post($frontPageID);

        if ($frontPagePage) {
            $frontPageTranslatedID =(function_exists('pll_get_post')? pll_get_post($frontPageID, $language) : '');
            $frontPageTranslation = (!empty($frontPageTranslatedID) ? get_post($frontPageTranslatedID) : '');

            if ($frontPageTranslation) {
                $result = str_replace(
                        $frontPagePage->post_name, $frontPageTranslation->post_name, $url
                );
            }
        }
        return $result;
}

add_filter('ampforwp_modify_frontpage_id', 'poly_post_id');
function poly_post_id($lang) {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    if( is_plugin_active( 'polylang/polylang.php' ) || is_plugin_active( 'polylang-pro/polylang.php' ) ){
        global $polylang, $redux_builder_amp;
        $frontPageID =  get_option('page_on_front');

        $currentLang = (function_exists('pll_current_language')? pll_current_language() : '');
        $translatedFrontpage        = (function_exists('pll_get_post')? pll_get_post($frontPageID,$currentLang) : '' );

        if((ampforwp_is_home() || ampforwp_is_front_page()) && !empty($translatedFrontpage) ){
            $lang = $translatedFrontpage;
        }  
        return $lang;
    }
    else {
        return $lang;
    }
}

add_filter('ampforwp_header_url', 'get_current_lang_home_url');
function get_current_lang_home_url($ampforwp_home_url){
    if(function_exists('pll_home_url')){
      $ampforwp_home_url   = pll_home_url();
    }
    if( function_exists('ampforwp_get_setting') && false == ampforwp_get_setting('amp-core-end-point') ){
        $ampforwp_home_url = $ampforwp_home_url.'amp/';
    }else{
        $ampforwp_home_url = $ampforwp_home_url.'?amp';  
    }
    return $ampforwp_home_url;
}
// translate GDPR popup string.
add_action('admin_init','ragister_amp_string_amp_polylang');
function ragister_amp_string_amp_polylang(){
    global $redux_builder_amp;
    if(isset($redux_builder_amp['amp-gdpr-compliance-switch']) && $redux_builder_amp['amp-gdpr-compliance-switch'] ){
        $headline = $accept = $reject = $settings = $user_data = $form_url = '';
        $headline   = $redux_builder_amp['amp-gdpr-compliance-headline-text'];
        $accept   = $redux_builder_amp['amp-gdpr-compliance-accept-text'];
        $reject   = $redux_builder_amp['amp-gdpr-compliance-reject-text'];
        $settings   = $redux_builder_amp['amp-gdpr-compliance-settings-text'];
        $user_data  = $redux_builder_amp['amp-gdpr-compliance-textarea'];
        $more_info  = $redux_builder_amp['amp-gdpr-compliance-for-more-privacy-info'];
        $privacy_button_text = '';
        $privacy_button_text = $redux_builder_amp['amp-gdpr-compliance-privacy-page-button-text'];
        
        $name = 'AMP GDPR Text';
        $group = 'amp-polylang';
        $gdpr_string = array($headline,$accept,$reject,$settings,$user_data,$more_info,$privacy_button_text);
        
        foreach ($gdpr_string as $key => $value) {
            if(function_exists('pll_register_string')){
              pll_register_string( $name, $value,$group);
            }
        }
    }
}

add_action('admin_init','ragister_static_parashse_amp_string_in_polylang');
function ragister_static_parashse_amp_string_in_polylang(){
    if(function_exists('pll_register_string')){
        global $redux_builder_amp;
        $view_nonamp_text = $amp_footer_text = $related_text = $recent_text = $breadcrumbs_homepage_text = $translator_next_text = $translator_previous_text = $translator_tags_text = $translator_search_placeholder = $translator_awc_slts_text = $translator_awc_savg_rate = $translator_awc_slh_text = $translator_awc_shl_text = $translator_awc_submit_text = $translator_add_to_cart_text = "";
        if(function_exists('ampforwp_get_setting')){
           $view_nonamp_text = ampforwp_get_setting('amp-translator-non-amp-page-text');
           $amp_footer_text = ampforwp_get_setting('amp-translator-footer-text');
        }
       $related_text = isset($redux_builder_amp['amp-translator-related-text']) ? $redux_builder_amp['amp-translator-related-text'] : '';
        $recent_text = isset($redux_builder_amp['amp-translator-recent-text']) ? $redux_builder_amp['amp-translator-recent-text'] : '';
        $breadcrumbs_homepage_text = isset($redux_builder_amp['amp-translator-breadcrumbs-homepage-text']) ? $redux_builder_amp['amp-translator-breadcrumbs-homepage-text'] : '';
        $translator_next_text = isset($redux_builder_amp['amp-translator-next-text']) ? $redux_builder_amp['amp-translator-next-text'] : '';
        $translator_previous_text = isset($redux_builder_amp['amp-translator-previous-text']) ? $redux_builder_amp['amp-translator-previous-text'] : '';
        $translator_tags_text = isset($redux_builder_amp['amp-translator-tags-text']) ? $redux_builder_amp['amp-translator-tags-text'] : '';
        $translator_search_placeholder = isset($redux_builder_amp['ampforwp-search-placeholder']) ? $redux_builder_amp['ampforwp-search-placeholder'] : '';
        $translator_awc_slts_text = isset($redux_builder_amp['ampforwp-wcp-sort-by-latest-txt']) ? $redux_builder_amp['ampforwp-wcp-sort-by-latest-txt'] : '';
        $translator_awc_savg_rate = isset($redux_builder_amp['ampforwp-wcp-sort-by-rating-txt']) ? $redux_builder_amp['ampforwp-wcp-sort-by-rating-txt'] : '';
        $translator_awc_slh_text = isset($redux_builder_amp['ampforwp-wcp-sort-low-high-txt']) ? $redux_builder_amp['ampforwp-wcp-sort-low-high-txt'] : '';
        $translator_awc_shl_text = isset($redux_builder_amp['ampforwp-wcp-sort-high-low-txt']) ? $redux_builder_amp['ampforwp-wcp-sort-high-low-txt'] : '';
        $translator_awc_submit_text = isset($redux_builder_amp['ampforwp-wcp-submit-txt']) ? $redux_builder_amp['ampforwp-wcp-submit-txt'] : '';
        $translator_add_to_cart_text = isset($redux_builder_amp['ampforwp-wcp-button-text']) ? $redux_builder_amp['ampforwp-wcp-button-text'] : '';

        $name = 'ampforwp_text';
        $group = 'amp-polylang';
        $ampforwp_string = array($view_nonamp_text,$amp_footer_text,$related_text,$recent_text,$breadcrumbs_homepage_text,$translator_next_text,$translator_previous_text,$translator_tags_text,$translator_search_placeholder,$translator_awc_slts_text,$translator_awc_savg_rate,$translator_awc_slh_text,$translator_awc_shl_text,$translator_awc_submit_text,$translator_add_to_cart_text);
        
        foreach ($ampforwp_string as $key => $value) {
              pll_register_string( $name, $value,$group);
        }
    }
}

add_filter('ampforwp_modify_gdpr_output','gdpr_polylang_text_transaltion');
function gdpr_polylang_text_transaltion($gdpr_text){
    global $redux_builder_amp;
    if(function_exists('pll__') && isset($redux_builder_amp['amp-gdpr-compliance-switch']) && $redux_builder_amp['amp-gdpr-compliance-switch']){ 
        $gdpr_text['headline'] = pll__($gdpr_text['headline']);
        $gdpr_text['user_data'] = pll__($gdpr_text['user_data']);
        $gdpr_text['accept'] = pll__($gdpr_text['accept']);
        $gdpr_text['reject'] = pll__($gdpr_text['reject']);
        $gdpr_text['settings'] = pll__($gdpr_text['settings']);
        $gdpr_text['more_info'] = pll__($gdpr_text['more_info']);
        $gdpr_text['privacy_button_text'] = pll__($gdpr_text['privacy_button_text']);
    } 
    return $gdpr_text;
}

add_filter('ampforwp_is_front_page', 'return_front_page_true_when_redirect_lang');
function return_front_page_true_when_redirect_lang($front_page){
    $polylang_options = get_option( 'polylang' );
    $redirect_lang = $polylang_options['redirect_lang'];
    if(function_exists('ampforwp_get_setting')){
        $get_custom_frontpage_settings    =  ampforwp_get_setting('amp-frontpage-select-option');
    }
    $show_on_front = get_option( 'show_on_front' );
    if(class_exists('polylang') && $redirect_lang == 1 && $get_custom_frontpage_settings == 1 && $show_on_front = "page" && !is_archive() && ampforwp_polylang_front_page() && !is_single() && !is_page() && !ampforwp_is_blog() && !is_singular()){
        $front_page = true;
    }
    return $front_page;
}