<nav class="topnav">
  <div class="container">
    <div class="nav-wrapper">
      <?php wp_nav_menu ( array( 'theme_location' => 'topnav-left' ) ); ?>
      <div class="logo-wrapper">
        <a href="<?php echo home_url(); ?>" title="Windley Contracting - Home" class="nav-logo logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Windley Contracting logo"></a>
      </div>
      <?php wp_nav_menu ( array( 'theme_location' => 'topnav-right' ) ); ?>
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




