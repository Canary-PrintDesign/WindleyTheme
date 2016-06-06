<?php get_header(); ?>

<?php
if ( is_category('Civil Projects') || has_category( 'Civil Projects' )) { ?>
    
    <script type="text/javascript">
    $(document).ready(function() {
        var imgpath = '<?php echo get_template_directory_uri(); ?>/images/background/';
        var images = ['civil1.jpg', 'civil2.jpg', 'civil3.jpg'];
        $('body').css({'background-image': 'url('+ imgpath + images[Math.floor(Math.random() * images.length)] + ')'});

    }); 
    </script>
<?php 
    }else if ( is_category('Commercial Projects') || has_category( 'Commercial Projects' ) ) { ?>
    
    <script type="text/javascript">
    $(document).ready(function() {
        var imgpath = '<?php echo get_template_directory_uri(); ?>/images/background/';
        var images = ['commercial1.jpg', 'commercial2.jpg', 'commercial3.jpg'];
        $('body').css({'background-image': 'url('+ imgpath + images[Math.floor(Math.random() * images.length)] + ')'});

    }); 
    </script>
<?php 
    }else if ( is_category('Residential Projects') || has_category( 'Residential Projects' )) { ?>
    
    <script type="text/javascript">
    $(document).ready(function() {
        var imgpath = '<?php echo get_template_directory_uri(); ?>/images/background/';
        var images = ['residential1.jpg', 'residential2.jpg', 'residential3.jpg'];
        $('body').css({'background-image': 'url('+ imgpath + images[Math.floor(Math.random() * images.length)] + ')'});

    }); 
    </script>
<?php } ?>


<div id="page_push"></div>

<div id="category" class="wrapper cf fixer_wrapper">
<h1 class="cat_header"><?php single_cat_title('',true); ?></h1>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
<div class="cat_thumb_container cf">
    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php 
    if(has_post_thumbnail()){
            the_post_thumbnail(array(265,155,'class' => 'thumb_f') );
        }
    ?></a>
    
<article id="content" class="setsize">
    <h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <div class="excerpt"><?php the_excerpt(); ?></div>
    <a href="<?php echo get_permalink(); ?>" class="read_more">More&gt;&gt;</a>
</article>
    </div>
 
    
</div><!--generic post identification-->

<?php endwhile; else: ?>
 <p>Sorry, no posts were found.</p>
<?php endif; ?>

<div class="archive_nav cf"><div class="prev"><?php previous_posts_link(); ?></div><div class="next"><?php next_posts_link(); ?></div></div>

<?php get_footer(); ?>