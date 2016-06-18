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
    <div id='page_push'>

        <div class="bgFeatureBox">
            <?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'rand', 'tag' => 'frontpage' );
            $myposts = get_posts( $args );

            foreach ( $myposts as $post ) : setup_postdata( $post );?>
                <a id="bgFeature" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <br />
                <?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full' )[0];
                echo("<style type='text/css'>body {background-image: url('".$src."') !important;}</style>"); ?>
                <span id="bgFeatureLocation">
                    <?php echo(get_post_meta( get_the_ID(), 'Location', true )); ?>
                </span>
                <?php
            endforeach;
            wp_reset_postdata();?>
        </div>

        <div class="splashText">
            <h1>WE BUILD GREAT STUFF!</h1>
            <h2>Let us build for you or something.</h2>
        </div>
        <div class="ctaButtonWrapper">
            <a href="#" class="ctaButton">View Our Projects</a>
        </div>

        <div class="heroboxes">
            <div class="herobox hb1">
                <h1>about windley</h1>
                <p>Praesent non consequat elit. Nam convallis mauris at tellus semper, sed pulvinar felis condimentum.  Praesent non consequat elit. Fusce sed maximus orci. Mauris tristique ligula a erat pellentesque tincidunt. </p>
                <a href="#" class="herobutton">LEARN MORE</a>
            </div>
            <div class="herobox hb2">
                <h1>community stuff</h1>
                <p>Donec posuere cursus sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Pellentesque sed ipsum elit.</p>
                <a href="#" class="herobutton">LEARN MORE</a>
            </div>
            <div class="herobox hb3">
                <h1>third column</h1>
                <p>Cras eu nisi lorem. Sed consectetur arcu ut lectus sollicitudin suscipit vel nec nisl. Vestibulum dapibus scelerisque velit, sed tincidunt mauris ullamcorper quis. Sed mollis tincidunt venenatis.</p>
                <a href="#" class="herobutton">LEARN MORE</a>
            </div>
        </div>
    </div>
<?php
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