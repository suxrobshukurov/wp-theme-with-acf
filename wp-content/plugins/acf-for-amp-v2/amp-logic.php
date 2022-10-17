<?php 
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

if( ! function_exists( 'get_editable_roles' ) ) { 
  // if using front-end forms then we need to add this core file
  require_once( ABSPATH . '/wp-admin/includes/user.php' ); 
}

function amp_acf_comparison_logic_checker($input){
    global $post;
    $type       = $input['key_1'];
    $comparison = $input['key_2'];
    $data       = $input['key_3'];

    $result             = ''; 
    $allowed_post_types = '';
   
    // Get all the allowed Post types
    $allowed_post_types = amp_acf_post_type_generator();
    // Get all the users registered
    $user               = wp_get_current_user();

    switch ($type) {
    // Basic Controls ------------ 
      // Posts Type
      case 'post_type':   
            $current_post_type  = $post->post_type;
            /*if($data=='page'){
              if(is_page())
            }else{*/
              if ( $comparison == 'equal' ) {
                  if ( $current_post_type == $data ) {
                    $result = true;
                  }
              }
              if ( $comparison == 'not_equal') {              
                  if ( $current_post_type != $data ) {
                    $result = true;
                  }
              }
            /*}*/
        break;

      // Logged in User Type
      case 'user_type':
            $current_user = $user->roles;
            if ( $comparison == 'equal') {
                if ( in_array( $data, (array) $user->roles ) ) {
                    $result = true;
                }
            }
            if ( $comparison == 'not_equal') {

                // Get all the registered user roles
                $roles = get_editable_roles();
                $all_user_types = array();
                foreach ($roles as $key => $value) {
                  $all_user_types[] = $key;
                }
                // Flip the array so we can remove the user that is selected from the dropdown
                $all_user_types = array_flip( $all_user_types );

                // User Removed
                unset( $all_user_types[$data] );

                // Check and make the result true that user is not found 
                if ( in_array( $data, (array) $all_user_types ) ) {
                    $result = true;
                }
            }
            
        break; 

    // Post Controls  ------------ 
      // Posts
      case 'post': 
            $current_post = $post->ID;
            if ( $comparison == 'equal' ) {
                if ( $current_post == $data ) {
                  $result = true;
                }
            }
            if ( $comparison == 'not_equal') {              
                if ( $current_post != $data ) {
                  $result = true;
                }
            }

        break;

      // Post Category
      case 'post_category':
          $postcat = get_the_category( $post->ID );
          $current_category = $postcat[0]->cat_ID; 

          if ( $comparison == 'equal') {
              if ( $data == $current_category ) {
                  $result = true;
              }
          }
          if ( $comparison == 'not_equal') {
              if ( $data != $current_category ) {
                  $result = true;
              }
          }
        break;
      // Post Format
      case 'post_format':
          $current_post_format = get_post_format( $post->ID );
          if ( $current_post_format === false ) {
              $current_post_format = 'standard';
          }
          if ( $comparison == 'equal') {
              if ( $data == $current_post_format ) {
                  $result = true;
              }
          }
          if ( $comparison == 'not_equal') {
              if ( $data != $current_post_format ) {
                  $result = true;
              }
          }
        break;

    // Page Controls ---------------- 
      // Page
      case 'page': 
        global $redux_builder_amp;
        if(ampforwp_is_front_page()){
          $current_post = $redux_builder_amp['amp-frontpage-select-option-pages'];
        }else{
          $current_post = $post->ID;
        }
            if ( $comparison == 'equal' ) {
                if ( $current_post == $data ) {
                  $result = true;
                }
            }
            if ( $comparison == 'not_equal') {              
                if ( $current_post != $data ) {
                  $result = true;
                }
            }
        break;

      // Page Template 
      case 'page_template':
        $current_page_template = get_page_template_slug( $post->ID );
            if ( $current_page_template == false ) {
                $current_page_template = 'default';
            }
            if ( $comparison == 'equal' ) {
                if ( $current_page_template == $data ) {
                    $result = true;
                }
            }
            if ( $comparison == 'not_equal') {              
                if ( $current_page_template != $data ) {
                    $result = true;
                }
            }

        break; 

    // Other Controls ---------------
      // Taxonomy Term
      case 'ef_taxonomy':

        // Get all the post registered taxonomies 
        $allowed_taxonomies = amp_acf_post_taxonomy_generator();
        // Get the list of all the taxonomies associated with current post
        $taxonomy_names = get_post_taxonomies( $post->ID );
        $checker    = '';
        $post_terms = '';

          if ( $data != 'all') {
            $post_terms = wp_get_post_terms($post->ID, $data);           

            if ( $comparison == 'equal' ) {
                if ( $post_terms ) {
                    $result = true;
                }
            }

            if ( $comparison == 'not_equal') { 
                $checker =  in_array($data, $taxonomy_names);       
                if ( ! $checker ) {
                    $result = true;
                }
            }

          } else {

            if ( $comparison == 'equal' ) {
              if ( $taxonomy_names ) {                
                  $result = true;
              }
            }

            if ( $comparison == 'not_equal') { 
              if ( ! $taxonomy_names ) {                
                  $result = true;
              }
            }

          }
        break;
      // 
      // case 'ef_user':

      //   break;

      default:
        $result = false;
        break;
    }

    return $result;

}