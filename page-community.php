<?php get_template_part( '/partials/header' ); ?>
<?php get_template_part( '/partials/hero' ); ?>

<?php
  class Link {
      public $text;
      public $href;

      function __construct($text, $href='#') {
        $this->text = $text;
        $this->href = $href;
      }
  }

  $community_links = array(
    new Link('<img src="../wp-content/themes/windley/images/community/1.png">', 'http://nanaimodiamonds.com/'),
    new Link('<img src="../wp-content/themes/windley/images/community/2.png">', 'http://www.habitatmvi.org/'),
    new Link('<img src="../wp-content/themes/windley/images/community/3.png">', 'http://www.havensociety.com/'),
    new Link('<img src="../wp-content/themes/windley/images/community/4.png">', 'http://harbourcityfc.com/'),
    new Link('<img src="../wp-content/themes/windley/images/community/5.png">', 'http://www.nanaimoloavesandfishes.org/'),
    new Link('<img src="../wp-content/themes/windley/images/community/6.png">', 'https://makeawishbc.ca/'),
    new Link('<img src="../wp-content/themes/windley/images/community/7.png">', 'http://hockeynanaimo.com/'),
    new Link('<img src="../wp-content/themes/windley/images/community/8.png">', 'http://www.nanaimosquashclub.com/'),
    new Link('<img src="../wp-content/themes/windley/images/community/9.png">', 'http://www.tourderock.ca/'),
    new Link('<img src="../wp-content/themes/windley/images/community/10.png">', 'http://www.nanaimo.ca/schedules/parks-recreation-culture/'),
    new Link('<img src="../wp-content/themes/windley/images/community/11.png">', 'https://www2.viu.ca/apprenticeship/index.asp'),
    new Link('<img src="../wp-content/themes/windley/images/community/12.png">', 'http://www.ypnanaimo.com/'),
  );
?>

<div class="community-page">
  <div class="container">
    <div class="heading">
      <h1><?php wp_title($sep=null) ?></h1>
    </div>
    <div class="content">
      <?php the_post(); ?>
      <?php the_content();?>
    </div>
    <div class="community-photo">
      <?php the_post_thumbnail(); ?>
    </div>
  </div>

  <div class="bg-color">
    <div class="container">
        <h3> Organizations we've had the opportunity to support</h3>
        <ul class="community-links">
          <?php foreach ($community_links as &$link) { ?>
            <li class="community-link">
                <div class="community-link-title"><?php echo $link->text ;?></div>
                <a href="<?php echo $link->href ;?>">
                  <div class="community-link-caption">WEBSITE <i class="fa fa-external-link"></i></div>
                </a>
            </li>
          <?php } ?>
        </ul>
    </div>
  </div>
</div>





<?php get_template_part( '/partials/footer' ); ?>
