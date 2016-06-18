</div><!--end page-->

<footer class="page-footer">
  <div class="container">
    <div class="contact-info">
      <h4>Windey Contracting Ltd.</h4>
      <ul class="address-list">
        <li>3711 Shenton Road</li>
        <li>Nanaimo, B.C.</li>
        <li>V9T 2H1Canada</li>
      </ul>

      <ul class="address-list">
        <li>250-758-3411</li>
        <li><a href="mailto:info@windleycontracting.com"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> info@windleycontracting.com</a></li>
      </ul>
    </div>

    <div class="site-map">
      <div class="site-map-group">
        <h4><?php menu_name('footer-menu-1') ?></h4>
        <?php wp_nav_menu( array('theme_location' => 'footer-menu-1') ); ?>
      </div>
      <div class="site-map-group">
        <h4><?php menu_name('footer-menu-2') ?></h4>
        <?php wp_nav_menu( array('theme_location' => 'footer-menu-2') ); ?>
      </div>
    </div>

    <div class="social-links">
      <div class="social-highlight">
        <h4>Follow us</h4>
        <a href="https://www.instagram.com/windleycontracting/"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
        <a href="https://twitter.com/WindleyHQ"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/windleycontracting"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
      </div>
      <div class="credits">
        Proudly presented by <a href="https://www.canaryprint.ca/">Canary Print+Design</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer() ?>
</body>
</html>
