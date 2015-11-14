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

<header class="container-fluid hidden-xs dark">
	<div class="wrapper center-block clearfix row">

	<div id="branding_simple" class="visible-xs center-block">
		<?php include get_template_directory() . '/assets/main.acro.simple.svg';?>
	</div>

	<div id="branding" class="hidden-xs center-block">
		<?php include get_template_directory() . '/assets/main.acro.svg';?>
	</div>

	<h1 class="text-center">Conheça e explore a nova plataforma</h1>

	<div class="search col-xs-12 col-sm-8">
		<?php echo get_search_form(); ?>
	</div>

	<div class="col-xs-12 col-sm-4">
		<a class="button">Cadastre-se já</a>
	</div>

</div></header>

<nav class="container-fluid dark">
	<div class="wrapper center-block clearfix row">

		<div class="branding">
			<a id="branding" class="clearfix" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php include get_template_directory() . '/assets/forma.svg';?>
				<h1 class="hidden-sm hidden-xs"><?php bloginfo( 'name' ); ?>
				<small class="hidden"><?php bloginfo( 'description' ); ?></small></h1>
			</a>
		</div>

		<div class="search">
			<?php echo get_search_form(); ?>
		</div>

		<button 	class="menu-visibility visible-xs"
							type="button"
							data-toggle="collapse"
							data-target="#collapseMenu"
							aria-expanded="false"
							aria-controls="collapseMenu">
			<span class="sr-only"><?php _e( 'Menu', 'argent' ); ?></span>
			<i class="fa fa-chevron-down"></i>
		</button>

		<div class="collapse collapse-xs menu" id="collapseMenu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
		</div>

</div></nav>

<script type="text/javascript">

	jQuery(window).scroll(function($) {
		if (jQuery(this).scrollTop() == jQuery('body > nav').position().top) {
			jQuery('body > nav').addClass("sticky");
		}
		else {
			jQuery('body > nav').removeClass("sticky");
		}
	});

</script>
