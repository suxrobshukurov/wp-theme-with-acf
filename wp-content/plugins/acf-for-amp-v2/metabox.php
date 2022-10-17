<?php
/*
 *	Select Meta Boxes:
 *	- This file contains all the select meta boxes in the AMP-ACF post type
 *	- 1. Show Data on?
 *	- 2. Hook Selector
 *	- 3. Repeater metaboxes.
 *	All the data is in this file from registration to save.
*/

add_action( 'add_meta_boxes', 'amp_acf_create_meta_box_select' );

function amp_acf_create_meta_box_select() {
	
	// First Section of Meta Box
	add_meta_box( 'amp_acf_show_data', __( 'Location','amp-acf' ), 'amp_acf_show_data_callback', 'amp_acf','normal', 'high' );

	// Repeater Comparison Field
	add_meta_box( 'amp_acf_select', __( 'Placement','amp-acf' ), 'amp_acf_select_callback', 'amp_acf','normal', 'high' );

	// Shortcode Metabox
	add_meta_box('amp_acf_add_shortcode', __( 'Shortcode','amp-acf' ), 'ampforwp_acf_shortcode_metabox_callback', 'amp_acf', 'side', 'high');

}

function amp_acf_show_data_callback($post){
	$pt_type 			= esc_attr( get_post_meta($post->ID, 'post_types_setting', true) );
	$current_location 	= esc_attr( get_post_meta($post->ID, 'position_selector', true) );
	$hook_to_insert 	= esc_attr( get_post_meta($post->ID, 'position_hook', true) );?>

	<div id="current_post_type_id" class="screen-reader-text"> <?php echo $pt_type; ?></div>
	<?php

		//security check
		wp_nonce_field( 'amp_acf_show_data_action_nonce', 'amp_acf_show_data_name_nonce' );

		/* Positioning */
		$amp_acf_location = array(
			'single' 	=> esc_attr__( 'Show Only on Post Pages' ,'amp-acf'),
			'global'	=> esc_attr__( 'Show Globaly ','amp-acf'),
			'homepage'	=> esc_attr__( 'Show Only on Homepage','amp-acf'),
			'archive'	=> esc_attr__( 'Show only on Archive Pages','amp-acf') 
			);?>
		<div style="display: inline-block; float: left; width:49%">
			<label for="position-selector" class="widefat"> <b> <?php esc_attr_e( 'Show Data on' ,'amp-acf');?> </b> </label>
			<select name="position_selector" id="position-selector" class="widefat">
				<?php foreach ($amp_acf_location as $key => $value) { ?>
					<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $current_location, $key );?> ><?php echo esc_attr( $value ); ?></option>
				<?php 
				} ?>			
			</select>
		</div>  
	<?php
		/* Hook */
		$hook_name = array(
			'ampforwp_after_header' 				=> 'After the Header (Global)' ,
			'ampforwp_post_before_design_elements'	=> 'Before Post (Single)',


			'ampforwp_post_before_design_elements'	=> 'Before Featured Image (Single)',
			'ampforwp_after_featured_image_hook'	=> 'After Featured Image (Single)',
			'ampforwp_after_meta_info_hook'			=> 'After Post Meta (Single)',
			'ampforwp_before_meta_taxonomy_hook'	=> 'Before Post Meta (Single) ',
			'ampforwp_before_post_content'			=> 'Before Post Content (Single) ',
			'ampforwp_after_post_content'			=> 'After Post Content (Single)',


			'ampforwp_post_after_design_elements'	=> 'Below the Post (Single)',
			'amp_post_template_above_footer'		=> 'Above the Footer (Sitewide)',
			'amp_post_template_footer'				=> 'In the Footer (Sitewide)',
			'manual_shortcode_hook'				    => 'Shortcode(Manual)'

			);?>
		<div style="display: inline-block;  float: right; width:49%">
			<label for="position-hook" class="widefat"> <b> <?php esc_attr_e( 'Where you want to show the content?' ,'amp-acf');?> </b> </label>
			<select name="position_hook" id="position-hook" class="widefat">
				<?php foreach ($hook_name as $key => $value) { ?>
					<option value="<?php echo $key ?>" <?php selected( $hook_to_insert, $key );?> ><?php echo $value ?></option>
				<?php 
				} ?>				
			</select> 
		</div>
		<div class="clear"></div>
	<?php 
}
   function ampforwp_acf_shortcode_metabox_callback() {
          global $post;
          $ampforwp_acf_post_id = $post->ID;
           echo '<input type="text" class="widefat urlfield" readonly="readonly" value="[amp-acf id=\''. $ampforwp_acf_post_id .'\']">';	
        }

add_action('admin_head', 'shortcode_meta_css');

function shortcode_meta_css() {
	global $post;
if(!empty($post)){
  	$ampforwp_acf_post_id = $post->ID;
  	$shortcode_hook = get_post_meta($ampforwp_acf_post_id,'position_hook', true);
	  	 if($shortcode_hook !== 'manual_shortcode_hook'){
			  echo '<style>
			    #amp_acf_add_shortcode {
			         display: none;
			    }
			  </style>';
	     }
	 }
  }

function amp_acf_select_callback($post) {
	$data_in_array 		= esc_sql ( get_post_meta($post->ID, 'data_in_array', true)  );
	$data_in_array = is_array($data_in_array)? array_values($data_in_array): array();  
 	if( empty( $data_in_array ) ) {
           $data_in_array[0] =array(
               'data_array' => array(
                    array(
                    'key_1' => 'post_type',
                    'key_2' => 'equal',
                    'key_3' => 'none',
                    )
       			)               
      	);
	}

	//security check
	wp_nonce_field( 'amp_acf_select_action_nonce', 'amp_acf_select_name_nonce' );?>

	<?php 
	// Type Select		
		$choices = array(
			__("Basic",'amp-acf') => array(
			//	'none'			=>	__(" -- Select --",'amp-acf'),
				'post_type'		=>	__("Post Type",'amp-acf'),
				'user_type'		=>	__("Logged in User Type",'amp-acf'),
			),
			__("Post",'amp-acf') => array(
				'post'			=>	__("Post",'amp-acf'),
				'post_category'	=>	__("Post Category",'amp-acf'),
				'post_format'	=>	__("Post Format",'amp-acf'), 
			),
			__("Page",'amp-acf') => array(
				'page'			=>	__("Page",'amp-acf'), 
				'page_template'	=>	__("Page Template",'amp-acf'),
			),
			__("Other",'amp-acf') => array( 
				'ef_taxonomy'	=>	__("Taxonomy Term",'amp-acf'), 
			)
		); 

		$comparison = array(
			'equal'		=>	esc_attr__( 'Equal to', 'amp-acf'), 
			'not_equal'	=>	esc_attr__( 'Not Equal to', 'amp-acf'),			
		);

		if(!array_key_exists( "data_array" ,$data_in_array[0]) && empty($data_in_array[0]['data_array']) && $data_in_array[0]['data_array'] == ''){
	    	$ndata_in_array['data_array'] = $data_in_array;
	    	$data_in_array = array($ndata_in_array);
	    }
		
		$total_group_fields_acf = count( $data_in_array );
?>
	  	<div class="amp-acf-placement-groups">
	  		<?php 
	  		for ($j=0; $j < $total_group_fields_acf; $j++) {
	        	$data_array = $data_in_array[$j]['data_array'];
	        	$total_fields = count( $data_array );
	        ?>
	        <div class="amp-acf-placement-group" name="data_in_array[<?php echo esc_attr( $j) ?>]" data-id="<?php echo esc_attr($j); ?>">           
			<?php 
				if($j>0){
					echo '<span style="margin-left:10px;font-weight:600">Or</span>';    
				}     
			?> 
	      <table class="widefat amp-acf-placement-table">
	        <tbody id="amp-acf-repeater-tbody" class="fields-wrapper-1">
	        <?php  for ($i=0; $i < $total_fields; $i++) {  
	          $selected_val_key_1 = $data_array[$i]['key_1']; 
	          $selected_val_key_2 = $data_array[$i]['key_2']; 
	          $selected_val_key_3 = $data_array[$i]['key_3'];
	          $selected_val_key_4 = '';
	          if(isset($data_array[$i]['key_4'])){
	            $selected_val_key_4 = $data_array[$i]['key_4'];
	          }
	          ?>
	          <tr class="toclone">
	            <td style="width:31%" class="post_types"> 
	              <select class="widefat select-post-type <?php echo esc_attr( $i );?>" name="data_in_array[group-<?php echo esc_attr( $j) ?>][data_array][<?php echo esc_attr( $i) ?>][key_1]">    
	                <?php 
	                foreach ($choices as $choice_key => $choice_value) { ?>         
	                  <option disabled class="pt-heading" value="<?php echo esc_attr($choice_key);?>"> <?php echo esc_html__($choice_key,'amp-acf');?> </option>
	                  <?php
	                  foreach ($choice_value as $sub_key => $sub_value) { ?> 
	                    <option class="pt-child" value="<?php echo esc_attr( $sub_key );?>" <?php selected( $selected_val_key_1, $sub_key );?> > <?php echo esc_html__($sub_value,'amp-acf');?> </option>
	                    <?php
	                  }
	                } ?>
	              </select>
	            </td>
	            <td style="width:31%; <?php if (  $selected_val_key_1 =='show_globally' ) { echo 'display:none;'; }  ?>">
	              <select class="widefat comparison" name="data_in_array[group-<?php echo esc_attr( $j) ?>][data_array][<?php echo esc_attr( $i )?>][key_2]"> <?php
	                foreach ($comparison as $key => $value) { 
	                  $selcomp = '';
	                  if($key == $selected_val_key_2){
	                    $selcomp = 'selected';
	                  }
	                  ?>
	                  <option class="pt-child" value="<?php echo esc_attr( $key );?>" <?php echo esc_attr($selcomp); ?> > <?php echo esc_html__($value,'amp-acf');?> </option>
	                  <?php
	                } ?>
	              </select>
	            </td>
	            <td style="width:31%;<?php if (  $selected_val_key_1 =='show_globally' ) { echo 'display:none;'; }  ?>">
	              <div class="insert-ajax-select">              
	                <?php
	                 amp_acf_ajax_select_creator($selected_val_key_1, $selected_val_key_3,$i, $j );
	                ?>
	                <div style="display:none;" class="spinner"></div>
	              </div>
	            </td>

	            <td class="widefat amp-acf-structured-clone" style="width:3.5%; <?php if (  $selected_val_key_1 =='show_globally' ) { echo 'display:none;'; }  ?>">
	            <span> <button type="button" class="button button-primary amp-acf-placement-button"> <?php echo esc_html__('And' ,'amp-acf');?> </button> </span> </td>
	            
	            <td class="widefat acf-condfd-delete" style="width:3.5%; <?php if (  $selected_val_key_1 =='show_globally' ) { echo 'display:none;'; }  ?>">
	            <span> <button  type="button" class="button button-info amp-acf-placement-button"><span class="dashicons dashicons-trash"></span></button> </span> </td>         
	          </tr>
	          <?php
	          } 
	        ?>
	        </tbody>
	      </table>
	      </div>
	      <?php } ?>
	    	<a style="margin-left: 8px; margin-bottom: 8px;" class="button  amp-acf-placement-or-group amp-acf-placement-button" href="#">Or</a>
	    </div>
	<?php
}

//save value entered into the custom metabox
add_action('save_post', 'amp_acf_select_save_data');
function amp_acf_select_save_data($id) {

  	// Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['amp_acf_select_name_nonce'] ) || !wp_verify_nonce( $_POST['amp_acf_select_name_nonce'], 'amp_acf_select_action_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

	$metavalue = array();
	if($post->post_status != 'auto-draft' && $post->post_status != 'trash'){
    	$meta_value = get_post_meta( $id, null, true );
    	$post_data_acf_array = array();  
	    $temp_condition_array  = array();
	    $show_globally =false;
	    if(isset($_POST['data_in_array'])){        
			$post_data_acf_array = $_POST['data_in_array'];    
			foreach($post_data_acf_array as $acf_groups){        
			  	foreach($acf_groups['data_array'] as $acf_group ){              
				    if(array_search('show_globally', $acf_group)){
				      	$temp_condition_array[0] =  $acf_group;  
				      	$show_globally = true;              
				    }
				}
			}    
			if($show_globally){
				unset($post_data_acf_array);
			$post_data_acf_array['group-0']['data_array'] = $temp_condition_array;
			}      
		}
		if(isset($_POST['data_in_array'])){
			update_post_meta( $id, 'data_in_array', $post_data_acf_array );
		}
	}
}


add_action('save_post', 'amp_acf_show_data_save_data');
function amp_acf_show_data_save_data($id) {

  // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['amp_acf_show_data_name_nonce'] ) || !wp_verify_nonce( $_POST['amp_acf_show_data_name_nonce'], 'amp_acf_show_data_action_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

	// Position selector
	if(isset($_POST['position_selector'])){
		update_post_meta( 
			$id, 
			'position_selector', 
			strip_tags($_POST['position_selector']) 
		);
	}

	// Position Hook
	if(isset($_POST['position_hook'])){
		update_post_meta( 
			$id, 
			'position_hook', 
			strip_tags($_POST['position_hook']) 
		);
	}

	// Current Post Type
	if(isset($_POST['post_types_setting'])){
		update_post_meta( 
			$id, 
			'post_types_setting', 
			strip_tags($_POST['post_types_setting']) 
		);
	}

}