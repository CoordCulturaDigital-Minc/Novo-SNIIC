<?php /* Template Name: Início */ ?>
<?php get_header(); ?>

<header class="container-fluid hidden-xs dark text-center">
	<div class="wrapper center-block clearfix row">

	<div id="branding_simple" class="visible-xs center-block lead">
		<?php include get_template_directory() . '/assets/main.acro.simple.svg';?>
	</div>

	<div id="branding" class="hidden-xs center-block lead">
		<?php include get_template_directory() . '/assets/main.acro.svg';?>
	</div>

	<div class="lead">
		<h1>Conheça e explore a nova plataforma</h1>
	</div>

	<div class="col-xs-12 col-sm-8 col-sm-offset-2 lead">
		<?php echo get_search_form(); ?>
	</div>

</div></header>

<?php get_template_part( 'front-page/front-page', 'velho-sniic' ); ?>

<?php get_template_part( 'front-page/front-page', 'mapas' ); ?>

<?php get_template_part( 'front-page/front-page', 'breve' ); ?>

<style>
	main nav {
		display: none;
	}
</style>

<?php query_posts( 'posts_per_page=4' ); ?>

<main class="container-fluid noticias" id="main" role="main"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<header>
			<h1>Notícias</h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/noticias/" class="header-sublink">Veja mais<i class="fa fa-chevron-right"></i></a>
		</header>

		<?php get_template_part( 'content/content', 'listing' ); ?>
	</div>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
