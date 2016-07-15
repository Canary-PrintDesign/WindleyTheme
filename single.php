<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

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

<div id="page" class="wrapper cf fixer_wrapper">

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="cat_title_single"><?php
            $category = get_the_category();
            if($category[0]){
            echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
            }
        ?></div>

    <article id="content" class="cf">
        <h1 class="cf"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </article>

    </div><!--generic post identification-->

<div class="prevpost"><?php next_post_link('%link', '<<', TRUE); ?></div>
<div class="nextpost"><?php previous_post_link('%link', '>>', TRUE); ?></div>


<?php endwhile; else: ?>
 <p>Sorry, no posts were found.</p>
<?php endif; ?>



<?php get_template_part( '/partials/footer' ); ?>
