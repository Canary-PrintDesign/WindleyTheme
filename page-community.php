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
    new Link('Habitat for Humanity', 'http://www.habitatmvi.org/'),
    new Link('Haven House'),
    new Link('HCFC Soccer for Kids'),
    new Link('Loaves & Fishes Food Bank'),
    new Link('Make a Wish Foundation'),
    new Link('Nanaimo Minor Hockey Association'),
    new Link('Nanaimo Open Squash Tournament'),
    new Link('Nanaimo Timbermen Senior A Lacrosse'),
    new Link('Nanaimo Winter Wonderland Skate'),
    new Link('VIU Apprenticeship Training Program'),
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
