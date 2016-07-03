<?php
    register_nav_menus(
        array(
        'topnav-left'   => 'Main Menu - Left Side',
        'topnav-right'  => 'Main Menu - Right Side',
        'footer-menu-1' => 'Footer Menu 1',
        'footer-menu-2' => 'Footer Menu 2'
        )
    );

add_theme_support("post-thumbnails");
add_image_size( 'largest_thumb', 860, 424, false );

function custom_excerpt_length($length){
    return 50;//words
}
add_filter('excerpt_length','custom_excerpt_length',9999);

function menu_name($location){
  $locations = get_nav_menu_locations();
  $menu_id = $locations[ $location ] ;
  $footer_nav_1 = wp_get_nav_menu_object($menu_id);
  echo $footer_nav_1->name;
}


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
        <label for="client-name" class="prfx-row-title"><?php _e( 'Client Name:', 'prfx-textdomain' )?></label>
        <input type="text" name="client-name" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['client-name'] ) ) echo $prfx_stored_meta['client-name'][0]; ?>" />
    </p>
    <p>
        <label for="location" class="prfx-row-title"><?php _e( 'Location:', 'prfx-textdomain' )?></label>
        <input type="text" name="location" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['location'] ) ) echo $prfx_stored_meta['location'][0]; ?>" />
    </p>
    <p>
        <label for="architect" class="prfx-row-title"><?php _e( 'Architect:', 'prfx-textdomain' )?></label>
        <input type="text" name="architect" id="architect" value="<?php if ( isset ( $prfx_stored_meta['architect'] ) ) echo $prfx_stored_meta['architect'][0]; ?>" />
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
}
add_action( 'save_post', 'prfx_meta_save' );
// --END "Project Location" Meta-Box--

?>
