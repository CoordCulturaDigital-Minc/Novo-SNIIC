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

</head>

<body <?php body_class(); ?>>
<?php include_once("analyticstracking.php") ?>

<a class="skip-link sr-only" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>

<?php get_template_part( 'brasil/brasil', 'barra' ); ?>

<nav class="container-fluid dark">
	<div class="wrapper center-block clearfix row">

	<div class="pull-left branding">
		<a id="branding" class="clearfix" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php include get_template_directory() . '/assets/forma.svg';?>
			<h1 class="hidden-sm"><?php bloginfo( 'name' ); ?>
			<small class="hidden"><?php bloginfo( 'description' ); ?></small></h1>
		</a>
	</div>

	<div class="pull-left search">
		<?php echo get_search_form(); ?>
	</div>

	<div class="pull-right menu">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
	</div>
</div></nav>
