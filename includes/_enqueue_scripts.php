<?php

function windley_scripts_method() {
  wp_enqueue_script( 'sticky-kit', get_stylesheet_directory_uri() . '/js/jquery.sticky-kit.min.js' );

  wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/build/js/app.js', array(
    'jquery',
    'sticky-kit'
  ) );
}

add_action( 'wp_enqueue_scripts', 'windley_scripts_method' );

?>
