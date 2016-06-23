<nav class="topnav">
  <div class="container">
    <div class="nav-wrapper">
      <?php wp_nav_menu ( array( 'theme_location' => 'topnav-left', 'container_class' => 'topnav-left-container' ) ); ?>
      <div class="logo-wrapper">
        <?php the_custom_logo(); ?>
      </div>
      <?php wp_nav_menu ( array( 'theme_location' => 'topnav-right', 'container_class' => 'topnav-right-container' ) ); ?>
    </div>
    <div class="social-links">
      <h4><a href="#">Careers &nbsp |</a></h4>
      <a href="https://www.instagram.com/windleycontracting/"><i class="fa fa-instagram fa-lg social-icons" aria-hidden="true"></i></a>
      <a href="https://twitter.com/WindleyHQ"><i class="fa fa-twitter fa-lg social-icons" aria-hidden="true"></i></a>
      <a href="https://www.facebook.com/windleycontracting"><i class="fa fa-facebook fa-lg social-icons" aria-hidden="true"></i></a>
    </div>
  </div>
</nav>
<!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a> -->
