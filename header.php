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
	<div class="beta-marker">
		<img class="hidden-xs" src="<?php echo get_template_directory_uri() ?>/assets/beta.svg">
		<img class="visible-xs" src="<?php echo get_template_directory_uri() ?>/assets/beta_sign.svg">
	</div>

	<div class="wrapper center-block clearfix row">

	<a id="branding" class="clearfix" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div>
		<?php global $branding_name; ?>
		<?php if ( ! isset( $branding_name ) ) : ?>
			<?php include get_template_directory() . '/assets/forma.svg';?>
			<h1 class="hidden-sm"><?php bloginfo( 'name' ); ?>
			<small class="hidden"><?php bloginfo( 'description' ); ?></small></h1>
		<?php else: ?>
			<?php include get_template_directory() . '/assets/sub.glyph.' . $branding_name['hash'] . '.svg';?>
			<h1><?php echo $branding_name['title']; ?><span class="hidden">.cultura.gov.br</span></h1>
		<?php endif; ?>
	</div></a>

	<button class="visible-xs"
					type="button"
					data-toggle="collapse"
					data-target="#collapseMenu"
					aria-expanded="false"
					aria-controls="collapseMenu">
	  <span class="sr-only"><?php _e( 'Menu', 'argent' ); ?></span>
		<i class="fa fa-chevron-down"></i>
	</button>
	<div class="collapse collapse-xs menu" id="collapseMenu">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'context-list')); ?>
	</div>
</div></nav>
