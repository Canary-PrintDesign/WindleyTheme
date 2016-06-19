<?php get_header(); ?>

<div class="container">
    <div class="bgFeatureBox">
        <?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'rand', 'tag' => 'frontpage' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
        ?>
        <a id="bgFeature" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <br>
        <?php
            $src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full' )[0];
            echo("<style type='text/css'>body {background-image: url('".$src."') !important;}</style>"); ?>
            <span id="bgFeatureLocation">
                <?php echo(get_post_meta( get_the_ID(), 'project_location', true )); ?>
            </span>
        <?php
        endforeach;
        wp_reset_postdata();?>
    </div>
    <div class="splashText">
        <h1>Performance & Strength</h1>
        <h2>Since 1949</h2>
    </div>
    <div class="ctaButtonWrapper">
        <a href="#" class="ctaButton">View Our Projects</a>
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

<?php get_footer(); ?>
