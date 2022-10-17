<?php
add_action( 'add_meta_boxes', 'amp_acf_create_meta_box_editor', 10, 2 );
function amp_acf_create_meta_box_editor( $post_type, $post ) {
    // PHP Editor
    add_meta_box( 'amp_acf_editor', __( 'PHP Editor','amp-acf' ), 'amp_acf_editor_callback', 'amp_acf', 'normal', 'default' );

    // JavaScript Text box
    add_meta_box( 'amp_acf_js_script_box', __( 'AMP JavaScript','amp-acf' ), 'amp_js_box_editor_callback', 'amp_acf', 'normal', 'default' );
}

function amp_acf_editor_callback() {
  global $post; 
  $current_post_id = $post->ID; ?>
    <div class="wrap">
        <div id="icon-themes" class="icon32"></div> 
            <?php 
            $amp_php_content = get_post_meta($current_post_id, 'ampforwp_php_content', true);
            $amp_scode_check = get_post_meta( $current_post_id, 'ampforwp_scode_php', true);

            //security check
            wp_nonce_field( 'amp_acf_editor_action_nonce', 'amp_acf_editor_name_nonce' );?>
 
            <div id="custom_css_container">
                <div name="custom_css" id="custom_css" style="border: 1px solid #DFDFDF; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width: 100%; height: 400px; position: relative;"></div>
            </div>
 
            <textarea id="custom_css_textarea" name="ampforwp_php_content" style="display: none" ><?php echo $amp_php_content; ?></textarea>     
            <h3>Sanitize Code for AMP</h3>
            <span class="checkbox-container color">
                <input name ="ampforwp_scode_php" type="checkbox" <?php echo $amp_scode_check ? "checked" : ""?> id="toggle" value="1" />
                <label for="toggle" ></label>
                <span class="active-circle"></span>
            </span>
    </div> <?php 
}


function get_php_editor_data($post_id){

    $amp_php_content = get_post_meta( $post_id, 'ampforwp_php_content', true);  
    return eval( "?>". $amp_php_content . "<?php " );
}


// JavaScript Text box
function amp_js_box_editor_callback() { 
    global $post;  
    $amp_scripts    = get_post_meta( $post->ID , 'amp_scripts', true); 
    
    //security check
    wp_nonce_field( 'amp_acf_js_action_nonce', 'amp_acf_js_name_nonce' );?>

    <textarea class="widefat" name="amp_scripts" id="" cols="30" placeholder='<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>' rows="10"><?php echo $amp_scripts; ?></textarea>

    <?php
}


// Save PHP Editor
add_action ( 'save_post' , 'amp_php_editor_meta_save' );
function amp_php_editor_meta_save ( $post_id ) {
  // Checks save status
    $is_autosave    = wp_is_post_autosave( $post_id );
    $is_revision    = wp_is_post_revision( $post_id ); 

    // Exits script depending on save status
    if ( $is_autosave || $is_revision ) {
        return;
    }

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['amp_acf_editor_name_nonce'] ) || !wp_verify_nonce( $_POST['amp_acf_editor_name_nonce'], 'amp_acf_editor_action_nonce' ) ) return;

    //if there is data to be saved to DB
    // Save data of Custom AMP Editor
    if ( isset( $_POST['ampforwp_php_content'] ) ) {
      update_post_meta($post_id, 'ampforwp_php_content', $_POST[ 'ampforwp_php_content' ] );
    }

      update_post_meta($post_id, 'ampforwp_scode_php', $_POST[ 'ampforwp_scode_php' ] );
    
    if ( isset( $_POST['amp_scripts'] ) ) {
      update_post_meta($post_id, 'amp_scripts', $_POST[ 'amp_scripts' ] );
    }
    
}


// Save function for AMP JS Scripts 
add_action ( 'save_post' , 'amp_js_meta_save' );
function amp_js_meta_save ( $post_id ) {
  // Checks save status
    $is_autosave    = wp_is_post_autosave( $post_id );
    $is_revision    = wp_is_post_revision( $post_id );

    // Exits script depending on save status
    if ( $is_autosave || $is_revision ) {
        return;
    }

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['amp_acf_js_name_nonce'] ) || !wp_verify_nonce( $_POST['amp_acf_js_name_nonce'], 'amp_acf_js_action_nonce' ) ) return;


    //if there is data to be saved to DB
    // Save data of Custom AMP Editor
    if ( isset( $_POST['ampforwp_php_content'] ) ) {
      update_post_meta($post_id, 'ampforwp_php_content', $_POST[ 'ampforwp_php_content' ] );
    }

      update_post_meta($post_id, 'ampforwp_scode_php', $_POST[ 'ampforwp_scode_php' ] );

    if ( isset( $_POST['amp_scripts'] ) ) {
      update_post_meta($post_id, 'amp_scripts', $_POST[ 'amp_scripts' ] );
    }
    
}