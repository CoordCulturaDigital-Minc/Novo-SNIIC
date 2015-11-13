<?php /* Template Name: Início */ ?>
<?php get_header(); ?>

<header class="container-fluid"><div class="wrapper center-block clearfix row">


	<div class="col-xs-12">
		<a class="button center-block text-center" href="<?php echo MAPAS_URL; ?>/painel">Cadastre-se</a>
	</div>

	<h1 class="hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1>
</div></header>

<?php get_template_part( 'front-page/front-page', 'velho-sniic' ); ?>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <?php echo get_search_form(); ?>
	</div>
</div></section>

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
