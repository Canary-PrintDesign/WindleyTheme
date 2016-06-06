<?php
    register_nav_menus(
        array(
        'primary-menu' => 'Primary Menu',
        'secondary-menu' => 'Secondary Menu'
        )
    );

    register_sidebar( array(
        'name'          => __( 'Footer Column 1' ),
        'id'            => 'footer_first',
        'description'   => 'First column in footer area',
        'class'         => '',
        'before_widget' => '<section class="column fxslow" id="footer_first">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>' )
     );
    register_sidebar( array(
        'name'          => __( 'Footer Column 2' ),
        'id'            => 'footer_second',
        'description'   => 'Middle column in footer area',
        'class'         => '',
        'before_widget' => '<section class="column fxslow" id="footer_second">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>' )
     );
    register_sidebar( array(
        'name'          => __( 'Footer Column 3' ),
        'id'            => 'footer_third',
        'description'   => 'Last column in footer area',
        'class'         => '',
        'before_widget' => '<section class="column fxslow" id="footer_third">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>' )
     );

add_theme_support("post-thumbnails");
add_image_size( 'largest_thumb', 860, 424, false );

function custom_excerpt_length($length){
    return 50;//words
}
add_filter('excerpt_length','custom_excerpt_length',9999);

?>
