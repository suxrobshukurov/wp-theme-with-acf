<?php

function polylang_admin_notice__success() {
   include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
   if( is_plugin_active('polylang/polylang.php') || is_plugin_active( 'polylang-pro/polylang.php' )){
   	return '';
   }
   ?>
    <div class="notice notice-warning is-dismissible">
        <p><?php _e( 'Please activate the parent plugin of polylang ', 'accelerated-mobile-pages-polylang-support' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'polylang_admin_notice__success' );



add_filter('admin_init','ampforwp_prepare_rewrite_rules');

function ampforwp_prepare_rewrite_rules(){
	add_filter('rewrite_rules_array','ampforwp_polyland_html');
}

//redux option panel compatible with poly lang
add_action("pll_init", function(){
    add_action('redux/field/redux_builder_amp/select/render/before', 'ampforwp_replaceValueWithPolylang',7,2);
});


function ampforwp_polyland_html($rules){
	if(!function_exists( 'pll_languages_list' )){return ;}

	$filter = str_replace( '_rewrite_rules', '', current_filter() );
	global $wp_rewrite;
	$newrules = array();
	//All options
	$always_rewrite = array( 'date', 'root', 'comments', 'search', 'author' );
	$languages = pll_languages_list();//All languages

	$polylang_options = get_option( 'polylang' );

	if ( $polylang_options['hide_default'] ) {
		$languages = array_diff( $languages, array(pll_default_language('slug')) );
	}

	if ( ! empty( $languages ) && defined( 'AMPFORWP_AMP_QUERY_VAR' ) ) {
		$slug = $wp_rewrite->root . ( $polylang_options['rewrite'] ? '' : 'language/' ) . '(' . implode( '|', $languages ) . ')/'.AMPFORWP_AMP_QUERY_VAR;
	}

	// For custom post type archives
		$cpts = array_intersect( ampforwp_poly_translated_post_types($polylang_options, $filter), get_post_types( array( '_builtin' => false ) ) );

		$cpts = $cpts ? '#post_type=(' . implode( '|', $cpts ) . ')#' : '';
		
		foreach ( $rules as $key => $rule ) {
			// Special case for translated post types and taxonomies to allow canonical redirection
			if ( $polylang_options['force_lang'] && in_array( $filter, array_merge( ampforwp_poly_translated_post_types($polylang_options, $filter), ampforwp_poly_translated_taxonomies($polylang_options, $filter) ) ) ) {

				if ( isset( $slug ) && apply_filters( 'pll_modify_rewrite_rule', true, array( $key => $rule ), $filter, false ) ) {
					$newrules[ $slug . str_replace( $wp_rewrite->root, '', ltrim( $key, '^' ) ) ] = str_replace(
						array( '[8]', '[7]', '[6]', '[5]', '[4]', '[3]', '[2]', '[1]', '?' ),
						array( '[9]', '[8]', '[7]', '[6]', '[5]', '[4]', '[3]', '[2]', '?lang=$matches[1]&amp=1&' ),
						$rule
					); // Should be enough!
				}

				$newrules[ $key ] = $rule;
			}

			// Rewrite rules filtered by language
			elseif ( in_array( $filter, $always_rewrite ) || in_array( $filter, ampforwp_poly_filtered_taxonomies($filter) ) || ( $cpts && preg_match( $cpts, $rule, $matches ) && ! strpos( $rule, 'name=' ) ) || ( 'rewrite_rules_array' != $filter && $polylang_options['force_lang'] ) ) {

				/** This filter is documented in include/links-directory.php */
				if ( apply_filters( 'pll_modify_rewrite_rule', true, array( $key => $rule ), $filter, empty( $matches[1] ) ? false : $matches[1] ) ) {
					if ( isset( $slug ) ) {
						$newrules[ $slug . str_replace( $wp_rewrite->root, '', ltrim( $key, '^' ) ) ] = str_replace(
							array( '[8]', '[7]', '[6]', '[5]', '[4]', '[3]', '[2]', '[1]', '?' ),
							array( '[9]', '[8]', '[7]', '[6]', '[5]', '[4]', '[3]', '[2]', '?lang=$matches[1]&amp=1&' ),
							$rule
						); // Should be enough!
					}

					if ( $polylang_options['hide_default'] ) {
						$newrules[ $key ] = str_replace( '?', '?lang=' . $polylang_options['default_lang'] . '&amp=1&', $rule );
					}
				} else {
					$newrules[ $key ] = $rule;
				}
			}

			// Unmodified rules
			else {
				$newrules[ $key ] = $rule;
			}
		}

		// The home rewrite rule
		if ( 'root' == $filter && isset( $slug ) ) {
			$newrules[ $slug . '?$' ] = $wp_rewrite->index . '?lang=$matches[1]&amp=1';
		}
		
		return $newrules;
}


function ampforwp_poly_translated_post_types($poly_options, $filter = true){
	$post_types = array( 'post' => 'post', 'page' => 'page' );
	if ( ! empty( $poly_options['media_support'] ) ) {
		$post_types['attachment'] = 'attachment';
	}

	if ( ! empty( $poly_options['post_types'] ) && is_array( $poly_options['post_types'] ) ) {
		$post_types = array_merge( $post_types, array_combine( $poly_options['post_types'], $poly_options['post_types'] ) );
	}
	$post_types = apply_filters( 'pll_get_post_types', $post_types, false );

	return $filter ? array_intersect( $post_types, get_post_types() ) : $post_types;
}

function ampforwp_poly_translated_taxonomies($polylang_options, $filter = true){
	$taxonomies = array( 'category' => 'category', 'post_tag' => 'post_tag' );

	if ( ! empty( $polylang_options['taxonomies'] ) && is_array( $polylang_options['taxonomies'] ) ) {
		$taxonomies = array_merge( $taxonomies, array_combine( $polylang_options['taxonomies'], $polylang_options['taxonomies'] ) );
	}

	$taxonomies = apply_filters( 'pll_get_taxonomies', $taxonomies, false );
	
	
	return $filter ? array_intersect( $taxonomies, get_taxonomies() ) : $taxonomies;
}


function ampforwp_poly_filtered_taxonomies( $filter = true ) {
		if ( did_action( 'after_setup_theme' ) ) {
			static $taxonomies = null;
		}

		if ( empty( $taxonomies ) ) {
			$taxonomies = array( 'post_format' => 'post_format' );

			$taxonomies = apply_filters( 'pll_filtered_taxonomies', $taxonomies, false );
		}

		return $filter ? array_intersect( $taxonomies, get_taxonomies() ) : $taxonomies;
	}



//ReduxChanges
function ampforwp_replaceValueWithPolylang(&$field, &$value){
    if($field['id']!='amp-frontpage-select-option-pages'){
    	return ;
    }
    global $redux_builder_amp;
    $frontPageID =  $redux_builder_amp['amp-frontpage-select-option-pages'];
    if(function_exists('pll_current_language')){
    	//$field['']
        $currentLang = pll_current_language();
    	$value = pll_translate_string($value,$currentLang);
		$defaultLang = pll_default_language();
    	
    	$allLanguages = pll_languages_list();//All languages
    	if(!isset($field['desc'])){$field['desc'] = '';}
    	foreach ($allLanguages as $key => $valueLang) {
    		if($currentLang != $valueLang){
			$langPageValue = pll_translate_string($frontPageID,$valueLang);
    			if($currentLang != $valueLang && $defaultLang!=$valueLang){
    				$newFieldName = $field['id'].'-'.$valueLang;
    			}else{
    				$newFieldName = $field['id'];
    			}
    			$field['desc'] .= '<input type="hidden" name="redux_builder_amp['.$newFieldName.']" id="'.$newFieldName.'" value="'.$langPageValue.'">'	;	
    		}
    	}
    	//Change the name
        /*if($currentLang!=$defaultLang && $redux_builder_amp['amp-frontpage-select-option']==1){
        	$newName = $field['id']."-".$currentLang;
        	$field['name'] = str_replace($field['id'], $newName, $field['name']);
        	$field['id'] = $newName;
        }*/
    }

}