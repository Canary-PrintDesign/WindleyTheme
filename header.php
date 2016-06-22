<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo( 'name' ); ?></title>
<!--css & favicon-->
<link href="<?php echo get_stylesheet_directory_uri();?>/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri();?>/build/css/main.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.png" rel="icon" type="image/png">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600,700,800|Merriweather:700italic,400' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--jquery-->
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php wp_head(); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#wprmenu_bar').click(function() {
			if ($('.menu_is_opened')[-1]){
				// location.reload();
			}else{
				location.reload();
			}
		});
	});
	$(window).scroll(function() {
		var header = $(document).scrollTop();
		if (header > 1 ) { // Change this number to the amount you want to scroll before the header sticks
			$('nav').addClass('sticky');
		} else {
			$('nav').removeClass('sticky');
		}
	});
</script>
</head>
<body <?php body_class(); ?>>
  <?php include('_topnav.php'); ?>
