<?php get_template_part( '/partials/header' ); ?>

<?php
    $args = array( 'post_type' => 'projects', 'posts_per_page' => 1, 'orderby' => 'rand', 'tag' => 'frontpage' );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post );
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full' )[0];
?>

<div class="background-image" style="background-image: url(<?php echo $src; ?>);"></div>
<div class="container">
    <div class="bgfeaturebox">
        <a class="bgfeature" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <br>
        <span class="bgfeaturelocation">
            <?php echo(get_post_meta( get_the_ID(), 'location', true )); ?>
        </span>
    </div>
    <div class="splashtext">
        <h1>Performance & Strength</h1>
        <h2>Since 1949</h2>
    </div>
    <div class="ctabuttonwrapper">
        <a href="#" class="ctabutton">View Our Projects</a>
    </div>

    <div class="heroboxes">
        <div class="herobox hb1">
            <h1>Upcoming Sales</h1>
            <p>We are a widely diverse development and general contracting company based on Vancouver Island and serving all of BC and Alberta in the civil, commercial, and residential sectors. </p>
            <a href="#" class="herobutton">LEARN MORE</a>
        </div>
        <div class="herobox hb2">
            <h1>Community Involvement</h1>
            <p>We pride ourselves in having had the privilege to support many local charities and events throughout Nanaimo and the surrounding area</p>
            <a href="#" class="herobutton">LEARN MORE</a>
        </div>
        <div class="herobox hb3">
            <h1>Industry Recognition</h1>
            <p>People LOVE our things.  LEED?  Other buzzwords?  YES!</p>
            <a href="#" class="herobutton">LEARN MORE</a>
        </div>
    </div>
</div>

<?php
endforeach;
wp_reset_postdata();?>

<?php get_template_part( '/partials/footer' ); ?>
