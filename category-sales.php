<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

<div class="category-banner">
    <div class="category-heading">
    </div>
</div>

<?php       if ( is_category('Sales')        || has_category( 'Sales' )) { ?>
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
          <p><?php echo(get_post_meta( get_the_ID(), 'sales', true ));?></p> <!-- The Project Excerpt -->
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

<?php get_template_part( '/partials/footer' ); ?>
