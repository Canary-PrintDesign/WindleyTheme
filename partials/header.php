<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo( 'name' ); ?></title>
<!--css & favicon-->
<link href="<?php echo get_stylesheet_directory_uri();?>/build/css/main.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.png" rel="icon" type="image/png">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600,700,800|Merriweather:700italic,400' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--jquery-->
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php include('_topnav_mobile.php'); ?>
  <?php include('_topnav.php'); ?>