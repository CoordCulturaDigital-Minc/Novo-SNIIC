<?php
/**
 * @package argent-neue
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Mobile first non-scalable, no-pinch -->
<!-- http://getbootstrap.com -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Adobe Typekit -->
<script src="https://use.typekit.net/aip1edd.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>

<style>
.velho-sniic {
	background: url(<?php echo get_template_directory_uri() ?>/assets/mapa.svg) no-repeat center;
}
</style>

</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>

<nav class="container-fluid">
	<div class="beta-marker">
		<img class="hidden-xs" src="<?php echo get_template_directory_uri() ?>/assets/beta.svg">
		<img class="visible-xs" src="<?php echo get_template_directory_uri() ?>/assets/beta_sign.svg">
	</div>
	<div class="wrapper center-block clearfix row">


	<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<img src="<?php echo get_template_directory_uri() ?>/assets/forma.svg" class="img-responsive"/>
	</a>

	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1>

	<button class="visible-xs"
					type="button"
					data-toggle="collapse"
					data-target="#collapseMenu"
					aria-expanded="false"
					aria-controls="collapseMenu">
	  <?php _e( 'Menu', 'argent' ); ?>
	</button>
	<div class="collapse" id="collapseMenu">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
	</div>
</div></nav>

<header class="container-fluid"><div class="wrapper center-block clearfix row">
	<div id="branding_simple" class="visible-xs center-block">
		<img src="<?php echo get_template_directory_uri() ?>/assets/main.acro.simple.svg" class="img-responsive"/>
	</div>
	<div id="branding" class="hidden-xs center-block">
		<img src="<?php echo get_template_directory_uri() ?>/assets/main.acro.svg" class="img-responsive"/>
	</div>

	<h3 class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center quotes">
		Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In euismod ultrices.
	</h3>
	<h1 class="hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1>
</div></header>
