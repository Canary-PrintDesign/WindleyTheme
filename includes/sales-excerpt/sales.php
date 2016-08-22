<?php

add_action( 'admin_menu', 'my_create_post_meta_box' );
add_action( 'save_post', 'my_save_post_meta_box', 10, 2 );

function my_create_post_meta_box() {
    add_meta_box( 'my-meta-box', 'Sales Excerpt', 'my_post_meta_box', 'projects', 'normal', 'high' );
}

function my_post_meta_box( $object, $box ) { ?>
    <p>
        <textarea name="sales" id="sales" cols="60" rows="4" tabindex="30" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'sales', true ), 1 ); ?></textarea>
        <input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
    </p>
<?php }

function my_save_post_meta_box( $post_id, $post ) {

    if ( !wp_verify_nonce( $_POST['my_meta_box_nonce'], plugin_basename( __FILE__ ) ) )
        return $post_id;

    if ( !current_user_can( 'edit_post', $post_id ) )
        return $post_id;

    $meta_value = get_post_meta( $post_id, 'sales', true );
    $new_meta_value = stripslashes( $_POST['sales'] );

    if ( $new_meta_value && '' == $meta_value )
        add_post_meta( $post_id, 'sales', $new_meta_value, true );

    elseif ( $new_meta_value != $meta_value )
        update_post_meta( $post_id, 'sales', $new_meta_value );

    elseif ( '' == $new_meta_value && $meta_value )
        delete_post_meta( $post_id, 'sales', $meta_value );
}

?>
