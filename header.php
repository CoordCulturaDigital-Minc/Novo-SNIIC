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

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>

<nav class="container-fluid"><div class="wrapper center-block clearfix row">
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

	<p class="col-xs-12 col-sm-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. </p>
	<p class="col-xs-12 col-sm-4">Vivamus fermentum semper porta. Nunc diam velit, adipiscing ut tristique vitae, sagittis vel odio. Maecenas convallis ullamcorper ultricies. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, id fringilla sem nunc vel mi. Nam dictum, odio nec pretium volutpat, arcu ante placerat erat, non tristique elit urna et turpis. Quisque mi metus, ornare sit amet fermentum et, tincidunt et orci. Fusce eget orci a orci congue vestibulum.</p>
	<aside class="col-xs-12 col-sm-4 plataformas">
		<ul>
			<li><a href="/">
				<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.indicadores.svg" class="img-responsive"/>
				<span>Indicadores</span>.cultura.gov.br</a></li>
			<li><a href="/">
				<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.mapas.svg" class="img-responsive"/>
				<span>Mapas</span>.cultura.gov.br</a></li>
			<li><a href="/">
				<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.publicacoes.svg" class="img-responsive"/>
				<span>Publicações</span>.cultura.gov.br</a></li>
			<li><a href="/">
				<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.vocabulario.svg" class="img-responsive"/>
				<span>Vocabulário</span>.cultura.gov.br</a></li>
		</ul>
	</aside>
	<!-- <h1 class="hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1> -->
</div></header>
