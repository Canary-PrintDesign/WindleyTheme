<?php

// Style those forms a bit
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/includes/custom-meta/meta-box-styles.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


// Add Custom Meta-Box called "Project Location"

// Function is called via: echo(get_post_meta( get_the_ID(), 'location', true ));

/**
 * Adds a meta box to the post editing screen
 */
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'Project Information', 'prfx-textdomain' ), 'prfx_meta_callback', 'post' );
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
        <label for="client-name" class="prfx-row-title"><?php _e( 'Client Name:*', 'prfx-textdomain' )?></label>
        <input type="text" name="client-name" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['client-name'] ) ) echo $prfx_stored_meta['client-name'][0]; ?>" />
    </p>
    <p>
        <label for="location" class="prfx-row-title"><?php _e( 'Location:*', 'prfx-textdomain' )?></label>
        <input type="text" name="location" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['location'] ) ) echo $prfx_stored_meta['location'][0]; ?>" />
    </p>
    <p>
        <label for="website" class="prfx-row-title"><?php _e( 'Website URL:', 'prfx-textdomain' )?></label>
        <input type="text" name="website" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['website'] ) ) echo $prfx_stored_meta['website'][0]; ?>" />
    </p>
    <p>
        <label for="architect" class="prfx-row-title"><?php _e( 'Architect:', 'prfx-textdomain' )?></label>
        <input type="text" name="architect" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['architect'] ) ) echo $prfx_stored_meta['architect'][0]; ?>" />
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
    if( isset( $_POST[ 'location' ] ) ) {
        update_post_meta( $post_id, 'location', sanitize_text_field( $_POST[ 'location' ] ) );
    }
    if( isset( $_POST[ 'architect' ] ) ) {
        update_post_meta( $post_id, 'architect', sanitize_text_field( $_POST[ 'architect' ] ) );
    }
    if( isset( $_POST[ 'client-name' ] ) ) {
        update_post_meta( $post_id, 'client-name', sanitize_text_field( $_POST[ 'client-name' ] ) );
    }
    if( isset( $_POST[ 'website' ] ) ) {
        update_post_meta( $post_id, 'website', sanitize_text_field( $_POST[ 'website' ] ) );
    }
}
add_action( 'save_post', 'prfx_meta_save' );




// --END "Project Location" Meta-Box--

?>
