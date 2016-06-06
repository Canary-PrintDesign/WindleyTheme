<?php get_header(); ?>

<?php if(is_page(771)){ ?>
    <script type="text/javascript">
    $(document).ready(function() {
        var imgpath = '<?php echo get_template_directory_uri(); ?>/images/background/';
        $('body').css({'background-image': 'url('+ imgpath + 'contact.jpg)'});

    }); 
    </script>
    
   <?php  }else{ ?>

    <script type="text/javascript">
    $(document).ready(function() {
        var imgpath = '<?php echo get_template_directory_uri(); ?>/images/background/';
        var images = ['page1.jpg', 'page2.jpg', 'page3.jpg', 'page4.jpg', 'page5.jpg', 'page6.jpg', 'page7.jpg', 'page8.jpg', 'page9.jpg', 'page11.jpg', 'page12.jpg'];
        $('body').css({'background-image': 'url('+ imgpath + images[Math.floor(Math.random() * images.length)] + ')'});

    }); 
    </script>
<?php } ?>

<?php
if ( is_home() || is_front_page() ) { ?>
    <?php echo "<div id='page_push'></div>";
} else { ?>

<div id="page" class="wrapper cf fixer_wrapper">

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   

    <div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <article id="content" class="cf">
        <h1 class="cf"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </article>
    
    </div><!--generic post identification-->


<?php endwhile; else: ?>
 <p>Sorry, no posts were found.</p>
<?php endif; ?>
<?php }  ?>


<?php get_footer(); ?>