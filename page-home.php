<?php get_template_part( '/partials/header' ); ?>

<?php
    $args = array( 'post_type' => 'projects', 'posts_per_page' => 1, 'orderby' => 'rand', 'tag' => 'frontpage' );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post );
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full' )[0];
?>

<div class="background-image" style="background-image: url(<?php echo $src; ?>);"></div>
<div class="container">
    <div class="bgfeaturebox-wrapper">
        <div class="bgfeaturebox" id="js-sticky-heading">
            <h4>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            <div>
              <?php echo(get_post_meta( get_the_ID(), 'location', true )); ?>
            </div>
        </div>
    </div>
    <div class="splashtext">
        <h1>Performance & Strength</h1>
        <h2>Since 1949</h2>
    </div>
    <div class="ctabuttonwrapper">
        <a href="./commercial" class="btn btn-primary">View Our Projects</a>
    </div>

    <div class="heroboxes">
        <div class="herobox hb1">
            <h1>Currently <br>Selling</h1>
            <p>We are a widely diverse development and general contracting company based on Vancouver Island and serving all of BC and Alberta in the civil, commercial, and residential sectors. </p>
            <a href="<?php echo get_category_url('sales'); ?>" class="herobutton">LEARN MORE</a>
        </div>
        <div class="herobox hb2">
            <h1>Community <br>Involvement</h1>
            <p>We are humbled to have had the opportunity to work with so many local charities, organizations,  and events throughout Nanaimo and the surrounding area.</p>
            <a href="./community" class="herobutton">LEARN MORE</a>
        </div>
        <div class="herobox hb3">
            <h1>Industry <br>Recognition</h1>
            <p>Windley has had the privilege of working on some incredible projects with great clients.  Check out some of the awards we've had the honor of being involved with.</p>
            <a href="./awards" class="herobutton">LEARN MORE</a>
        </div>
    </div>
</div>

<?php
endforeach;
wp_reset_postdata();?>

<?php get_template_part( '/partials/footer' ); ?>
