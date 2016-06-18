<div id="header_wrapper" class="cf">
  <header id="masthead" class="wrapper cf">
    <a href="<?php echo home_url(); ?>" title="Windley Contracting - Home" class="home_link"><img src="<?php echo get_template_directory_uri(); ?>/images/windley-logo.png" alt="Windley Contracting logo" class="logo"></a>
    <nav id="mainmenu">
      <?php wp_nav_menu ( array( 'theme_location' => 'primary-menu' ) ); ?>
    </nav>
  </header>
</div>
