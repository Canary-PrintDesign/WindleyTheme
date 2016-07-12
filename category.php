<?php get_header(); ?>
<?php get_template_part( '/partials/hero' ); ?>

<div class="category-banner">
    <div class="category-heading">
      <div class="container">
        <?php wp_nav_menu ( array( 'theme_location' => 'category-menu', 'container_class' => '' ) ); ?>
      </div>
    </div>
</div>

<?php       if ( is_category('Civil Projects')        || has_category( 'Civil Projects' )) { ?>
<?php }else if ( is_category('Commercial Projects')   || has_category( 'Commercial Projects' ) ) { ?>
<?php }else if ( is_category('Residential Projects')  || has_category( 'Residential Projects' )) { ?>
<?php } ?>


<div class="project-listing">
  <div class="container">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>  <!-- Includes the classes: .two-column-post .two-column-post-left .two-column-post-right !-->
      <div class="media">
        <div class="media-left"> <!-- The Project Thumbnail -->
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="media-left">
            <?php
              if(has_post_thumbnail()){
                the_post_thumbnail(array(300,200,'class' => 'thumbnail') );
              }
            ?>
          </a>
        </div>
        <div class="media-body"> <!-- The Project Title -->
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <h4><?php the_title(); ?></h4>
          </a>
          <p><?php echo get_the_short_excerpt(); ?>...</p> <!-- The Project Excerpt -->
          <div class="details-button-container">
            <a href="<?php echo get_permalink(); ?>" class="details-button">
              DETAILS
            </a>
            <?php
              $key = 'website';
              $themeta = get_post_meta($post->ID, $key, TRUE);
              if($themeta != '') { ?>
                <a class="website-button" href="<?php echo(get_post_meta( get_the_ID(), 'website', true ));?>">WEBSITE</a>
              <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>

    <?php endwhile; else: ?>
     <p>Sorry, no posts were found.</p>
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="prev">
      <?php previous_posts_link(); ?>
    </div>
    <div class="next">
      <?php next_posts_link(); ?>
    </div>
   </div>
</div>

<?php get_footer(); ?>
