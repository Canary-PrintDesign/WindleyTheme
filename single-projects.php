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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $gallery_id = (get_post_meta( get_the_ID(), 'gallery-id', true )); ?>
<div <?php post_class(); ?>>

<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

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

    <div class="website">
      <?php
        $key = 'website';
        $themeta = get_post_meta($post->ID, $key, TRUE);
        if($themeta != '') { ?>
          <a class="website-button" href="<?php echo(get_post_meta( get_the_ID(), 'website', true ));?>">WEBSITE</a>
        <?php
        }
      ?>
    </div>
    <?php get_template_part( '/partials/project-meta' ); ?>
  </div>
</div>
<div class="container">
  <div class="prevpost prevpost-full">
    <?php $next_post = get_adjacent_post( true, '', false ); ?>
    <?php if ( is_a( $next_post, 'WP_Post' ) ) {  ?>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
      <i class="fa fa-angle-left"></i> Previous Project
    </a>
    <?php } ?>
  </div>
  <div class="nextpost nextpost-full">
    <?php $previous_post = get_adjacent_post( true, '', true ); ?>
    <?php if ( is_a( $previous_post, 'WP_Post' ) ) {  ?>
    <a href="<?php echo get_permalink( $previous_post->ID ); ?>">
      Next Project <i class="fa fa-angle-right"></i>
    </a>
    <?php } ?>
  </div>
  <div class="prevpost prevpost-mobile">
    <?php $next_post = get_adjacent_post( true, '', false ); ?>
    <?php if ( is_a( $next_post, 'WP_Post' ) ) {  ?>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
      <i class="fa fa-angle-left"></i> Previous
    </a>
    <?php } ?>
  </div>
  <div class="nextpost nextpost-mobile">
    <?php $previous_post = get_adjacent_post( true, '', true ); ?>
    <?php if ( is_a( $previous_post, 'WP_Post' ) ) {  ?>
    <a href="<?php echo get_permalink( $previous_post->ID ); ?>">
      Next <i class="fa fa-angle-right"></i>
    </a>
    <?php } ?>
  </div>
</div>

<div class="modal">
  <?php echo do_shortcode('[nggallery id='. $gallery_id .' template=flickity]') ?>
  <a href="#" class="close">✕</a>
</div>

<?php endwhile; else: ?>
 <p>Sorry, no posts were found.</p>
<?php endif; ?>

<?php get_template_part( '/partials/footer' ); ?>
