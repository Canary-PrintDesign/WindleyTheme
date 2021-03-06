<?php



// Style those forms a bit
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/includes/custom-meta/meta-box-styles.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


// Function is called via: echo(get_post_meta( get_the_ID(), 'NAME-OF-META', true ));

/**
 * Adds a meta box to the post editing screen
 */
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'Project Information', 'prfx-textdomain' ), 'prfx_meta_callback', 'projects' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );


/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>

    <p>
        <label for="gallery-id" class="prfx-row-title"><?php _e( 'Gallery ID #:', 'prfx-textdomain' )?></label>
        <input type="text" name="gallery-id" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['gallery-id'] ) ) echo $prfx_stored_meta['gallery-id'][0]; ?>" />
    </p>
    <p>
        <label for="client-name" class="prfx-row-title"><?php _e( 'Client Name:', 'prfx-textdomain' )?></label>
        <input type="text" name="client-name" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['client-name'] ) ) echo $prfx_stored_meta['client-name'][0]; ?>" />
    </p>
    <p>
        <label for="location" class="prfx-row-title"><?php _e( 'Location:', 'prfx-textdomain' )?></label>
        <input type="text" name="location" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['location'] ) ) echo $prfx_stored_meta['location'][0]; ?>" />
    </p>
    <p>
        <label for="website" class="prfx-row-title"><?php _e( 'Website URL:', 'prfx-textdomain' )?></label>
        <input type="text" name="website" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['website'] ) ) echo $prfx_stored_meta['website'][0]; ?>" />
    </p>
    <p>
        <label for="size" class="prfx-row-title"><?php _e( 'Size:', 'prfx-textdomain' )?></label>
        <input type="text" name="size" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['size'] ) ) echo $prfx_stored_meta['size'][0]; ?>" />
    </p>
    <p>
        <label for="consultant1" class="prfx-row-title"><?php _e( 'Consultant 1:', 'prfx-textdomain' )?></label>
        <input type="text" name="consultant1" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['consultant1'] ) ) echo $prfx_stored_meta['consultant1'][0]; ?>" />
    </p>
    <p>
        <label for="consultant2" class="prfx-row-title"><?php _e( 'Consultant 2:', 'prfx-textdomain' )?></label>
        <input type="text" name="consultant2" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['consultant2'] ) ) echo $prfx_stored_meta['consultant2'][0]; ?>" />
    </p>
    <p>
        <label for="consultant3" class="prfx-row-title"><?php _e( 'Consultant 3:', 'prfx-textdomain' )?></label>
        <input type="text" name="consultant3" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['consultant3'] ) ) echo $prfx_stored_meta['consultant3'][0]; ?>" />
    </p>

    <p>
        <label for="consultant4" class="prfx-row-title"><?php _e( 'Consultant 4:', 'prfx-textdomain' )?></label>
        <input type="text" name="consultant4" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['consultant4'] ) ) echo $prfx_stored_meta['consultant4'][0]; ?>" />
    </p>
    <p>
        <label for="consultant5" class="prfx-row-title"><?php _e( 'Consultant 5:', 'prfx-textdomain' )?></label>
        <input type="text" name="consultant5" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['consultant5'] ) ) echo $prfx_stored_meta['consultant5'][0]; ?>" />
    </p>

    <?php
}

/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'client-name' ] ) ) {
        update_post_meta( $post_id, 'client-name', sanitize_text_field( $_POST[ 'client-name' ] ) );
    }
    if( isset( $_POST[ 'location' ] ) ) {
        update_post_meta( $post_id, 'location', sanitize_text_field( $_POST[ 'location' ] ) );
    }
    if( isset( $_POST[ 'website' ] ) ) {
        update_post_meta( $post_id, 'website', sanitize_text_field( $_POST[ 'website' ] ) );
    }
    if( isset( $_POST[ 'size' ] ) ) {
        update_post_meta( $post_id, 'size', sanitize_text_field( $_POST[ 'size' ] ) );
    }
    if( isset( $_POST[ 'consultant1' ] ) ) {
        update_post_meta( $post_id, 'consultant1', sanitize_text_field( $_POST[ 'consultant1' ] ) );
    }
    if( isset( $_POST[ 'consultant2' ] ) ) {
        update_post_meta( $post_id, 'consultant2', sanitize_text_field( $_POST[ 'consultant2' ] ) );
    }
    if( isset( $_POST[ 'consultant3' ] ) ) {
        update_post_meta( $post_id, 'consultant3', sanitize_text_field( $_POST[ 'consultant3' ] ) );
    }
    if( isset( $_POST[ 'consultant4' ] ) ) {
        update_post_meta( $post_id, 'consultant4', sanitize_text_field( $_POST[ 'consultant4' ] ) );
    }
    if( isset( $_POST[ 'consultant5' ] ) ) {
        update_post_meta( $post_id, 'consultant5', sanitize_text_field( $_POST[ 'consultant5' ] ) );
    }
    if( isset( $_POST[ 'gallery-id' ] ) ) {
        update_post_meta( $post_id, 'gallery-id', sanitize_text_field( $_POST[ 'gallery-id' ] ) );
    }
}
add_action( 'save_post', 'prfx_meta_save' );

?>
