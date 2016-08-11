<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<div class="main-content">
  <div class="container">
    <div class="contact-intro-form">
      <div class="page-content">
        <?php the_content(); ?>
      </div>

      <div class="contact-form">
         <?php echo do_shortcode( '[wpforms id="1199"]' ); ?> <!-- STAGING -->
         <?php echo do_shortcode( '[wpforms id="1201"]' ); ?> <!-- LOCAL -->
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>

<?php get_template_part( '/partials/footer' ); ?>
