<?php
/*
 * This code builds the size matrix form in the New Bikes Post Type Edit page.
 * The code is redundant, but it works.
 *
 *
*/

add_action( 'add_meta_boxes', 'add_size_matrix_meta_box' );
function add_size_matrix_meta_box()
{
	add_meta_box( 'my-meta-box-id', 'New Bike Size Matrix', 'size_matrix_form', 'new-bikes', 'normal', 'high' );
	add_meta_box( 'my-meta-box-id', 'Frame Size Matrix', 'size_matrix_form', 'parts-accessories', 'normal', 'high' );
}

function size_matrix_form( $post )
{
	$values = get_post_custom( $post->ID );
        // This is the top row of the size matrix for available sizes
	$size_column_1 = isset( $values['column_1_size_input'] ) ? esc_attr( $values['column_1_size_input'][0] ) : '';
	$size_column_2 = isset( $values['column_2_size_input'] ) ? esc_attr( $values['column_2_size_input'][0] ) : '';
	$size_column_3 = isset( $values['column_3_size_input'] ) ? esc_attr( $values['column_3_size_input'][0] ) : '';
	$size_column_4 = isset( $values['column_4_size_input'] ) ? esc_attr( $values['column_4_size_input'][0] ) : '';
	$size_column_5 = isset( $values['column_5_size_input'] ) ? esc_attr( $values['column_5_size_input'][0] ) : '';
	$size_column_6 = isset( $values['column_6_size_input'] ) ? esc_attr( $values['column_6_size_input'][0] ) : '';
	$size_column_7 = isset( $values['column_7_size_input'] ) ? esc_attr( $values['column_7_size_input'][0] ) : '';
	$size_column_8 = isset( $values['column_8_size_input'] ) ? esc_attr( $values['column_8_size_input'][0] ) : '';

        // This is the bottom row of the size matrix for stock levels
	$stock_column_1 = isset( $values['column_1_stock_input'] ) ? esc_attr( $values['column_1_stock_input'][0] ) : '';
	$stock_column_2 = isset( $values['column_2_stock_input'] ) ? esc_attr( $values['column_2_stock_input'][0] ) : '';
	$stock_column_3 = isset( $values['column_3_stock_input'] ) ? esc_attr( $values['column_3_stock_input'][0] ) : '';
	$stock_column_4 = isset( $values['column_4_stock_input'] ) ? esc_attr( $values['column_4_stock_input'][0] ) : '';
	$stock_column_5 = isset( $values['column_5_stock_input'] ) ? esc_attr( $values['column_5_stock_input'][0] ) : '';
	$stock_column_6 = isset( $values['column_6_stock_input'] ) ? esc_attr( $values['column_6_stock_input'][0] ) : '';
	$stock_column_7 = isset( $values['column_7_stock_input'] ) ? esc_attr( $values['column_7_stock_input'][0] ) : '';
	$stock_column_8 = isset( $values['column_8_stock_input'] ) ? esc_attr( $values['column_8_stock_input'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
<style type="text/css">
.size_matrix_table_admin input[type="text"] {
  width: 75px
}
</style>
<table class="size_matrix_table_admin">
  <tbody>
    <tr>
      <td>
        <strong>Size</strong>
      </td>
      <td>
        <input type="text" name="column_1_size_input" id="my_meta_box_text" value="<?php echo $size_column_1; ?>" />
      </td>
      <td>
        <input type="text" name="column_2_size_input" id="my_meta_box_text" value="<?php echo $size_column_2; ?>" />
      </td>
      <td>
        <input type="text" name="column_3_size_input" id="my_meta_box_text" value="<?php echo $size_column_3; ?>" />
      </td>
      <td>
        <input type="text" name="column_4_size_input" id="my_meta_box_text" value="<?php echo $size_column_4; ?>" />
      </td>
      <td>
        <input type="text" name="column_5_size_input" id="my_meta_box_text" value="<?php echo $size_column_5; ?>" />
      </td>
      <td>
        <input type="text" name="column_6_size_input" id="my_meta_box_text" value="<?php echo $size_column_6; ?>" />
      </td>
      <td>
        <input type="text" name="column_7_size_input" id="my_meta_box_text" value="<?php echo $size_column_7; ?>" />
      </td>
      <td>
        <input type="text" name="column_8_size_input" id="my_meta_box_text" value="<?php echo $size_column_8; ?>" />
      </td>
    </tr>
    <tr>
      <td>
        <strong>Stock</strong>
        </td>
      <td>
        <input type="text" name="column_1_stock_input" id="my_meta_box_text" value="<?php echo $stock_column_1; ?>" />
      </td>
      <td>
        <input type="text" name="column_2_stock_input" id="my_meta_box_text" value="<?php echo $stock_column_2; ?>" />
      </td>
      <td>
        <input type="text" name="column_3_stock_input" id="my_meta_box_text" value="<?php echo $stock_column_3; ?>" />
      </td>
      <td>
        <input type="text" name="column_4_stock_input" id="my_meta_box_text" value="<?php echo $stock_column_4; ?>" />
      </td>
      <td>
        <input type="text" name="column_5_stock_input" id="my_meta_box_text" value="<?php echo $stock_column_5; ?>" />
      </td>
      <td>
        <input type="text" name="column_6_stock_input" id="my_meta_box_text" value="<?php echo $stock_column_6; ?>" />
      </td>
      <td>
        <input type="text" name="column_7_stock_input" id="my_meta_box_text" value="<?php echo $stock_column_7; ?>" />
      </td>
      <td>
        <input type="text" name="column_8_stock_input" id="my_meta_box_text" value="<?php echo $stock_column_8; ?>" />
      </td>
    </tr>
  </tbody>
</table>
	
	<?php	
}


add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	
	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	
	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data
	$allowed = array( 
		'a' => array( // on allow a tags
			'href' => array() // and those anchords can only have href attribute
		)
	);
	
	// Probably a good idea to make sure your data is set
	if( isset( $_POST['column_1_size_input'] ) )
		update_post_meta( $post_id, 'column_1_size_input', wp_kses( $_POST['column_1_size_input'], $allowed ) );
		
	if( isset( $_POST['column_2_size_input'] ) )
		update_post_meta( $post_id, 'column_2_size_input', wp_kses( $_POST['column_2_size_input'], $allowed ) );
		
	if( isset( $_POST['column_3_size_input'] ) )
		update_post_meta( $post_id, 'column_3_size_input', wp_kses( $_POST['column_3_size_input'], $allowed ) );
		
	if( isset( $_POST['column_4_size_input'] ) )
		update_post_meta( $post_id, 'column_4_size_input', wp_kses( $_POST['column_4_size_input'], $allowed ) );
		
	if( isset( $_POST['column_5_size_input'] ) )
		update_post_meta( $post_id, 'column_5_size_input', wp_kses( $_POST['column_5_size_input'], $allowed ) );
		
	if( isset( $_POST['column_6_size_input'] ) )
		update_post_meta( $post_id, 'column_6_size_input', wp_kses( $_POST['column_6_size_input'], $allowed ) );
		
	if( isset( $_POST['column_7_size_input'] ) )
		update_post_meta( $post_id, 'column_7_size_input', wp_kses( $_POST['column_7_size_input'], $allowed ) );
		
	if( isset( $_POST['column_8_size_input'] ) )
		update_post_meta( $post_id, 'column_8_size_input', wp_kses( $_POST['column_8_size_input'], $allowed ) );
		
	if( isset( $_POST['column_1_stock_input'] ) )
		update_post_meta( $post_id, 'column_1_stock_input', wp_kses( $_POST['column_1_stock_input'], $allowed ) );
		
	if( isset( $_POST['column_2_stock_input'] ) )
		update_post_meta( $post_id, 'column_2_stock_input', wp_kses( $_POST['column_2_stock_input'], $allowed ) );
		
	if( isset( $_POST['column_3_stock_input'] ) )
		update_post_meta( $post_id, 'column_3_stock_input', wp_kses( $_POST['column_3_stock_input'], $allowed ) );
		
	if( isset( $_POST['column_4_stock_input'] ) )
		update_post_meta( $post_id, 'column_4_stock_input', wp_kses( $_POST['column_4_stock_input'], $allowed ) );
		
	if( isset( $_POST['column_5_stock_input'] ) )
		update_post_meta( $post_id, 'column_5_stock_input', wp_kses( $_POST['column_5_stock_input'], $allowed ) );
		
	if( isset( $_POST['column_6_stock_input'] ) )
		update_post_meta( $post_id, 'column_6_stock_input', wp_kses( $_POST['column_6_stock_input'], $allowed ) );
		
	if( isset( $_POST['column_7_stock_input'] ) )
		update_post_meta( $post_id, 'column_7_stock_input', wp_kses( $_POST['column_7_stock_input'], $allowed ) );
		
	if( isset( $_POST['column_8_stock_input'] ) )
		update_post_meta( $post_id, 'column_8_stock_input', wp_kses( $_POST['column_8_stock_input'], $allowed ) );
		
} ?>
