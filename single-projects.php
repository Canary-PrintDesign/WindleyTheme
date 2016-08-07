<?php

function single_project_scripts_method() {
  wp_enqueue_script( 'flickity', get_stylesheet_directory_uri() . '/js/flickity.pkgd.min.js' );

  wp_enqueue_script( 'product-detail', get_stylesheet_directory_uri() . '/build/js/pages/product-detail.js', array(
    'jquery',
    'flickity'
  ) );
}

add_action( 'wp_enqueue_scripts', 'single_project_scripts_method' );

?>

<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $gallery_id = (get_post_meta( get_the_ID(), 'gallery-id', true )); ?>
<div <?php post_class(); ?>>

  <div class="category-banner">
    <div class="category-heading">
      <div class="container">
        <?php wp_nav_menu ( array( 'theme_location' => 'category-menu', 'container_class' => '' ) ); ?>
      </div>
    </div>
  </div>

<div class="container">
  <div class="project-photos">
    <?php echo do_shortcode('[nggallery id='. $gallery_id .' template=flickity-with-thumbs]') ?>
  </div>

  <div class="project-content">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php get_template_part( '/partials/project-meta' ); ?>
  </div>

  <div class="prevpost"><?php next_post_link( '%link' ); ?></div>
  <div class="nextpost"><?php previous_post_link( '%link' ); ?></div>
</div>

<div class="modal">
  <?php echo do_shortcode('[nggallery id='. $gallery_id .' template=flickity]') ?>
</div>

<?php endwhile; else: ?>
 <p>Sorry, no posts were found.</p>
<?php endif; ?>

<?php get_template_part( '/partials/footer' ); ?>
