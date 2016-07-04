<?php get_header(); ?>

<div class="category">
<div class="hero-container">
  <div class="hero-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg/contact.jpg);">
    <div class="container">
      <div class="hero-heading">
        <h1> Projects </h1>
      </div>
    </div>
  </div>
</div>
</div>


<div class="about-page">

  <div class="container">

    <div class="about-windley">
      <div class="heading">
        <h1>
          <?php $include = get_pages('include=770'); $content = apply_filters('the_content',$include[0]->post_title); echo $content; ?>
        </h1>
      </div>
      <div class="content">
        <?php $include = get_pages('include=770'); $content = apply_filters('the_content',$include[0]->post_content); echo $content; ?>
      </div>
      <div class="about-photo">
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail();
        }
        ?>
      </div>
    </div>
  </div>
  <div class="bg-color">
    <div class="bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg/history.jpg);">
      <div class="container">
        <div class="windley-history">
          <div class="heading">
            <h1>
              <?php $include = get_pages('include=863'); $content = apply_filters('the_content',$include[0]->post_title); echo $content; ?>
            </h1>
          </div>
          <div class="content">
            <?php $include = get_pages('include=863'); $content = apply_filters('the_content',$include[0]->post_content); echo $content; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<?php get_footer(); ?>

