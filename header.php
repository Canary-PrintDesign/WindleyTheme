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
			<nav>
				<ul>
					<li><?php wp_nav_menu( array( 'theme_location' => 'menu-left' ) ); ?>
					</li>
					<li>  <?php if ( get_theme_mod( 'nav-logo' ) ) : ?>
							<div class='site-logo'>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'nav-logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
							</div>
						<?php else : ?>
							<hgroup>
								<h1>Not working</h1>
							</hgroup>
						<?php endif; ?>
					</li>
					<li><?php wp_nav_menu( array( 'theme_location' => 'menu-right' ) ); ?>
					</li>
			</nav>


		</header>
	</div><!--end header_wrapper-->
	<div id="pageup"></div>
