<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo( 'name' ); ?></title>
<!--css & favicon-->
<link href="<?php echo get_stylesheet_directory_uri();?>/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.png" rel="icon" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--jquery-->
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
<?php wp_head(); ?> 
<script>
$(document).ready(function() {
$('#wprmenu_bar').click(function() {
    if ($('.menu_is_opened')[-1]){
   // location.reload();
	}else{
	location.reload();
	}
}
});
});
</script>
</head>
<body <?php body_class(); ?>>
<div class="pusher">
<div id="header_wrapper" class="cf">
	<header id="masthead" class="wrapper cf">
		<a href="<?php echo home_url(); ?>" title="Windley Contracting - Home" class="home_link"><img src="<?php echo get_template_directory_uri(); ?>/images/windley-logo.png" alt="Windley Contracting logo" class="logo"></a>
	<nav id="mainmenu">
	<?php wp_nav_menu ( array( 'theme_location' => 'primary-menu' ) ); ?>
	</nav>
	</header>
</div><!--end header_wrapper-->
    <div id="pageup"></div>