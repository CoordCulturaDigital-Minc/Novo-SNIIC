<?php /* Template Name: Início */ ?>
<?php get_header(); ?>

<header class="container-fluid dark"><div class="wrapper center-block clearfix row">
	<div id="branding_simple" class="visible-xs center-block">
		<?php include get_template_directory() . '/assets/main.acro.simple.svg';?>
	</div>
	<div id="branding" class="hidden-xs center-block">
		<?php include get_template_directory() . '/assets/main.acro.svg';?>
	</div>

	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center quotes">
	<h3>Conheça e explore a nova plataforma</h3>
	</div>

	<h1 class="hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1>

	<div class="col-xs-12 col-sm-10 col-md-8">
    <?php echo get_search_form(); ?>
	</div>
	<div class="col-xs-12 col-sm-2 col-md-4">
		<a class="button center-block text-center" href="<?php echo MAPAS_URL; ?>/painel">Cadastre-se já</a>
	</div>
</div></header>

<nav class="container-fluid dark compressed">
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

	<?php echo get_search_form(); ?>

	<button class="pull-right"
					type="button"
					data-toggle="collapse"
					data-target="#collapseMenu"
					aria-expanded="false"
					aria-controls="collapseMenu">
	  <span class="sr-only"><?php _e( 'Menu', 'argent' ); ?></span>
		<i class="fa fa-chevron-down"></i>
	</button>
</div></nav>

<?php get_template_part( 'front-page/front-page', 'velho-sniic' ); ?>

<?php get_template_part( 'front-page/front-page', 'mapas' ); ?>

<?php get_template_part( 'front-page/front-page', 'breve' ); ?>

<style>
	main nav {
		display: none;
	}
</style>

<?php query_posts( 'posts_per_page=4' ); ?>

<main class="container-fluid" id="main" role="main"><div class="wrapper center-block clearfix row">

	<div class="col-xs-12">
		<header class="section-header">
			<div class="pull-left">
				<h1>Notícias</h1>
			</div>
			<div class="pull-right">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/noticias/" class="header-sublink">Veja mais<i class="fa fa-chevron-right"></i></a>
			</div>
		</header>
	</div>

	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<?php get_template_part( 'content/content', 'listing' ); ?>
	</div>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
