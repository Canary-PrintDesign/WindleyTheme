</div><!--end page-->

<footer class="page-footer">
  <div class="container">
    <div class="contact-info">
      <h4>Windley Contracting Ltd.</h4>
      <ul class="address-list">
        <li>3711 Shenton Road</li>
        <li>Nanaimo, B.C. V9T 2H1</li>
        <li>Canada</li>
      </ul>
      <br>
      <ul class="address-list">
        <li><a href="tel:+1 250-758-3411"><i class="fa fa-phone fa-lg" aria-hidden="true"></i> 250-758-3411</a></li>
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
        <a href="https://www.instagram.com/windleycontracting/"><i class="fa fa-instagram fa-lg social-icons" aria-hidden="true"></i></a>
        <a href="https://twitter.com/WindleyHQ"><i class="fa fa-twitter fa-lg social-icons" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/windleycontracting"><i class="fa fa-facebook fa-lg social-icons" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="credits">
        Proudly presented by <a href="https://www.canaryprint.ca/">Canary Print+Design</a>
      </div>
      <div class="copyright">
        &copy <?php echo date("Y") ?> Windley Contracting LTD.  All rights reserved
      </div>
    </div>
  </div>
</footer>

<script src="<?php echo get_stylesheet_directory_uri();?>/build/js/app.js"></script>
<?php wp_footer() ?>
</body>
</html>
