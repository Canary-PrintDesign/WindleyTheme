<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>


<div class="container">
  <div class="careers-intro">
    <div class="content">
      <?php the_content(); ?>
    </div>
    <div class="careers-photo">
      <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        }
        ?>
    </div>
  </div>
</div>

<div class="careers-bg">
  <div class="bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg/careers.jpg);">
    <div class="container">
      <div class="contact-form">
         <?php echo do_shortcode( '[wpforms id="1199"]' ); ?> <!-- STAGING -->
         <?php echo do_shortcode( '[wpforms id="1201"]' ); ?> <!-- LOCAL -->
      </div>
    </div>
  </div>
</div>


<?php endwhile; endif; ?>

<?php get_template_part( '/partials/footer' ); ?>




