<nav class="topnav">
  <div class="container">
    <div class="nav-wrapper">
      <?php wp_nav_menu ( array( 'theme_location' => 'topnav-left' ) ); ?>
      <?php the_custom_logo(); ?>
      <?php wp_nav_menu ( array( 'theme_location' => 'topnav-right' ) ); ?>
    </div>
  </div>
</nav>
<!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a> -->
