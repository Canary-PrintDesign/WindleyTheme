<?php get_header(); ?>

<div class="hero-container">
  <div class="hero-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg/contact.jpg);">
    <div class="container">
      <div class="hero-heading">
        <h1> Projects </h1>
      </div>
    </div>
  </div>
</div>



<div class="category-banner">
    <div class="category-heading">
      <ul>
        <a href="#"><li class="not-dicks">Civil</li
        ></a><a href="#"><li class="dicks">Commercial</li
        ></a><a href="#"><li class="not-dicks">Residential</li></a>
      </ul>
    </div>
</div>



<?php       if ( is_category('Civil Projects') || has_category( 'Civil Projects' )) { ?>
<?php }else if ( is_category('Commercial Projects') || has_category( 'Commercial Projects' ) ) { ?>
<?php }else if ( is_category('Residential Projects') || has_category( 'Residential Projects' )) { ?>
<?php } ?>




<div class="project-listing">
  <div class="container">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>  <!-- Includes the classes: .two-column-post .two-column-post-left .two-column-post-right !-->
      <div class="media">
        <div class="media-left">
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="media-left">
            <?php
              if(has_post_thumbnail()){
              the_post_thumbnail(array(265,155,'class' => 'thumbnail') );
            } ?>
          </a>
        </div>
        <div class="media-body">
          <h4>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a>
          </h4>
            <?php the_excerpt(); ?>
          <a href="<?php echo get_permalink(); ?>" class="details-button">
            DETAILS
          </a>
        </div>
      </div>
    </div>

    <?php endwhile; else: ?>
     <p>Sorry, no posts were found.</p>
    <?php endif; ?>

    <div>
      <div class="prev">
        <?php previous_posts_link(); ?>
      </div>
      <div class="next">
        <?php next_posts_link(); ?>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
