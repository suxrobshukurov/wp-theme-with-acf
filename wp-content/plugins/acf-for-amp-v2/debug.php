<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
// Debug Mode
add_action('amp_post_template_footer','amp_acf_debug_on_off');
function amp_acf_debug_on_off(){
  $debug_mode   = '';
  $current_user = '';
  $debug_mode   = apply_filters('amp_acf_debug_mode', $debug_mode);

  $current_user = wp_get_current_user();

  if ( $debug_mode && $current_user->roles[0] === 'administrator' ) {    
      return amp_acf_debug_data();
  }
  return ;

}

function amp_acf_debug_data(){
    $post_id = amp_acf_get_all_post_id();
    if(count($post_id)>0){
      foreach($post_id as $id){
        $conditions = get_post_meta( $id, 'data_in_array', true);  
        
        echo "<pre>";
          var_dump($conditions);
        echo "</pre>";

        $output = amp_acf_field_checker($conditions);
        
        echo "<pre>";
          var_dump($output);
        echo "</pre>";
      }
    }
      
  return;
}