<?php

require get_template_directory() . '/includes/custom-meta/_custom-meta.php';
require get_template_directory() . '/includes/slug-in-classname/slug-in-classname.php';
require get_template_directory() . '/includes/custom-post-type/custom-post-type.php';

// Short Excerpt code for limiting characters on projects page
function get_the_short_excerpt(){
$excerpt = get_the_excerpt();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$the_str = substr($excerpt, 0, 160);
return $the_str;
}

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
    register_nav_menus(
        array(
        'topnav-left'   => 'Main Menu - Left Side',
        'topnav-right'  => 'Main Menu - Right Side',
        'category-menu' => 'Category Menu',
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
