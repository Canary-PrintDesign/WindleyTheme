<nav class="topnav">
  <div class="nav-wrapper">
    <?php wp_nav_menu ( array( 'theme_location' => 'topnav-left' ) ); ?>
    <?php the_custom_logo(); ?>
    <?php wp_nav_menu ( array( 'theme_location' => 'topnav-right' ) ); ?>
  </div>
</nav>
