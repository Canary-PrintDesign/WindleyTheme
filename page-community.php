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
    new Link('Nanaimo Diamonds', 'http://nanaimodiamonds.com/'),
    new Link('Habitat for Humanity', 'http://www.habitatmvi.org/'),
    new Link('Haven House', 'http://www.havensociety.com/'),
    new Link('HCFC Soccer for Kids', 'http://harbourcityfc.com/'),
    new Link('Loaves & Fishes Food Bank', 'http://www.nanaimoloavesandfishes.org/'),
    new Link('Make a Wish Foundation', 'https://makeawishbc.ca/'),
    new Link('Nanaimo Minor Hockey Association', 'http://hockeynanaimo.com/'),
    new Link('Nanaimo Open Squash Tournament', 'http://www.nanaimosquashclub.com/'),
    new Link('Nanaimo Timbermen Senior A Lacrosse', 'http://www.tmen.ca/'),
    new Link('Nanaimo Winter Wonderland Skate', 'http://www.nanaimo.ca/schedules/parks-recreation-culture/'),
    new Link('VIU Apprenticeship Training Program', 'https://www2.viu.ca/apprenticeship/index.asp'),
    new Link('Young Profesionals of Nanaimo', 'http://www.ypnanaimo.com/'),
  );
?>

<div class="community-page">

  <div class="container">
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
