<?php get_header(); ?>

<div id="blog" class="wrapper cf fixer_wrapper">

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php 
    if(has_post_thumbnail()){
        the_post_thumbnail(array(265,155,'class' => 'thumb_f') );
    }
?></a>
<article id="content" class="cf">
    <h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <?php the_excerpt(); ?>
</article>
    
</div><!--generic post identification-->

<?php endwhile; else: ?>
 <p>Sorry, no posts were found.</p>
<?php endif; ?>



<?php get_footer(); ?>