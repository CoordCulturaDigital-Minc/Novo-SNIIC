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

			<div class="cadastre">
				<a>Cadastre-se já</a>
			</div>
		</div>

</div></nav>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		jQuery('body > nav').css('top', 34);
	});

	jQuery(window).scroll(function($) {
		var scrollPosition = jQuery(this).scrollTop();
		var $header = jQuery('body > header');
		var $nav = jQuery('body > nav');

		if (scrollPosition > ($header.position().top + $header.height())) {
			$nav.addClass("sticky");
		}
		else {
			$nav.removeClass("sticky");
		}

		$nav.css('top', scrollPosition >= 34 ? 0 : 34 - jQuery(this).scrollTop());

	});

</script>
