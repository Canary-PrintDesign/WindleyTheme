<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<div class="map">
  <div class="container">
    <div class="contact-info">
      <h2>Windley Contracting Ltd.</h4>
      <ul class="address-list">
        <li>3711 Shenton Road</li>
        <li>Nanaimo, B.C. V9T 2H1</li>
        <li>Canada</li>
      </ul>
      <ul class="contact-list">
        <li><a href="tel:+1 250-758-3411"><i class="fa fa-phone fa-lg"></i>250-758-3411</a></li>
        <li><i class="fa fa-fax fa-lg"></i> 250-758-0917</li>
        <li><a href="mailto:info@windleycontracting.com"><i class="fa fa-envelope fa-lg"></i>info@windleycontracting.com</a></li>
      </ul>
      <ul class="ap-list">
        <li>Accounts Payable</li>
        <li><a href="mailto:ap@windleycontracting.com"></i>ap@windleycontracting.com</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="main-content">
  <div class="container">
    <div class="contact-intro-form">
      <div class="page-content">
        <?php the_content(); ?>
      </div>

      <div class="contact-form">
         <?php echo do_shortcode( '[wpforms id="1195"]' ); ?> <!-- Adjust shortcode to new environment -->
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>

<?php get_template_part( '/partials/footer' ); ?>
