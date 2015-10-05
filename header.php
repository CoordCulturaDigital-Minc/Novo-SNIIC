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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>

<nav><div class="wrapper center-block clearfix">
	<i></i>
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1>

	<button type="button"
					data-toggle="collapse"
					data-target="#collapseMenu"
					aria-expanded="false"
					aria-controls="collapseMenu">
	  <?php _e( 'Menu', 'argent' ); ?>
	</button>
	<div class="collapse" id="collapseMenu">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
	</div>
<div></nav>

<header class="row"><div class="wrapper center-block">
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1>
</div></header>
