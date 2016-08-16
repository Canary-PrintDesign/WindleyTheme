<nav class="topnav-mobile">
  <div class="navbar">
    <a href="#" data-toggle=".topnav-mobile"><i class="fa fa-bars fa-lg"></i></a>
    <div class="logo-wrapper">
      <a href="<?php bloginfo('url'); ?>" class="custom-logo-link"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile.png"></a>
    </div>
  </div>

  <div class="dropdown">
    <?php wp_nav_menu ( array( 'theme_location' => 'topnav-left', 'container_class' => 'topnav-left-container', 'depth' => 1) ); ?>
    <?php wp_nav_menu ( array( 'theme_location' => 'topnav-right', 'container_class' => 'topnav-right-container', 'depth' => 1) ); ?>

    <div class="social-links">
      <h4><a href="<?php bloginfo('home'); ?>/careers">Careers</a></h4>
      <a href="https://www.instagram.com/windleycontracting/"><i class="fa fa-instagram fa-lg social-icons" aria-hidden="true"></i></a>
      <a href="https://twitter.com/WindleyHQ"><i class="fa fa-twitter fa-lg social-icons" aria-hidden="true"></i></a>
      <a href="https://www.facebook.com/windleycontracting"><i class="fa fa-facebook fa-lg social-icons" aria-hidden="true"></i></a>
    </div>
  </div>
</nav>
