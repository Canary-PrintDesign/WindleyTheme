<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div <?php post_class(); ?>>

  <div class="category-banner">
    <div class="category-heading">
      <div class="container">
        <?php wp_nav_menu ( array( 'theme_location' => 'category-menu', 'container_class' => '' ) ); ?>
      </div>
    </div>
  </div>

<div class="container">
  <div class="gallery">
    <?php
      $id = (get_post_meta( get_the_ID(), 'gallery-id', true ));
      echo do_shortcode('[nggallery id='. $id .' template=windley]');
    ?>
  </div>

  <div class="project-content">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php get_template_part( '/partials/project-meta' ); ?>
    <!-- <span class="title">Location</span><span class="desc">Description</span> -->



  </div>

  <div class="prevpost"><?php next_post_link( '%link' ); ?></div>
  <div class="nextpost"><?php previous_post_link( '%link' ); ?></div>
</div>






<?php endwhile; else: ?>
 <p>Sorry, no posts were found.</p>
<?php endif; ?>



<?php get_template_part( '/partials/footer' ); ?>
