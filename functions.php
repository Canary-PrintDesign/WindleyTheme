<?php

require get_template_directory() . '/includes/custom-meta/_custom-meta.php';

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


?>
