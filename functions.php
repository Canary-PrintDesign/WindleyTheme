<?php

require get_template_directory() . '/includes/custom-meta/_custom-meta.php';

// Adds classes to Categories Columns on Categories pages
add_filter('post_class','category_two_column_classes');

function category_two_column_classes( $classes ) {
global $wp_query;
if( is_category() ) :
$classes[] = 'two-column-post';
if( $wp_query->current_post%2 == 0 ) {
  $classes[] = 'two-column-post-left';
} else {
  $classes[] = 'two-column-post-right';
}

endif;
return $classes;
}


// Registration of various navigation menus
>>>>>>> 4bd16f9... Add projects page  (categories listing)
    register_nav_menus(
        array(
        'topnav-left'   => 'Main Menu - Left Side',
        'topnav-right'  => 'Main Menu - Right Side',
        'footer-menu-1' => 'Footer Menu 1',
        'footer-menu-2' => 'Footer Menu 2'
        )
    );


// Add different thumbnail size.  **To be removed**
add_theme_support("post-thumbnails");
add_image_size( 'largest_thumb', 860, 424, false );


// Custom Excerpt length.  **To be modified**
function custom_excerpt_length($length){
    return 50;//words
}
add_filter('excerpt_length','custom_excerpt_length',9999);


// Add site-map to footer - Sinetheta
function menu_name($location){
  $locations = get_nav_menu_locations();
  $menu_id = $locations[ $location ] ;
  $footer_nav_1 = wp_get_nav_menu_object($menu_id);
  echo $footer_nav_1->name;
}


?>
