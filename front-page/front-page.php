<?php /* Template Name: Início */ ?>
<?php get_header(); ?>

<?php the_post(); ?>

<header class="container-fluid dark text-center">
	<div class="wrapper center-block clearfix row">

	<div id="branding_simple" class="visible-xs center-block lead">
		<?php include get_template_directory() . '/assets/main.acro.simple.svg';?>
	</div>

	<div id="branding" class="hidden-xs center-block lead">
		<?php include get_template_directory() . '/assets/main.acro.svg';?>
	</div>

	<div>
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="col-xs-12 col-sm-8 col-sm-offset-2 hidden-xs lead">
		<?php echo get_search_form(); ?>
	</div>

</div></header>

<section class="container-fluid velho-sniic"><div class="wrapper center-block clearfix row">

	<div class="col-xs-12 col-sm-2 col-sm-offset-0">
		<img class="center-block" src="<?php echo get_template_directory_uri() ?>/assets/old-logo.svg"/>
	</div>

	<div class="col-xs-12 col-sm-5 col-sm-offset-1 text-center dark">
		<h4>
			Está procurando seu cadastro no SNIIC ou precisando do número SNIIC? Ele mudou, saiba mais aqui.
		</h4>
	</div>

	<div class="col-xs-12 col-sm-3 col-sm-offset-1">
		<a href="<?php echo site_url('novo-cadastro-sniic'); ?>"><button class="btn btn-default center-block">Meu número SNIIC</button></a>
	</div>

</div></section>

<main class="container-fluid page frameless" role="main">

		<?php the_content(); ?>

</main>

<?php get_template_part( 'front-page/front-page', 'mapas' ); ?>
<?php get_template_part( 'front-page/front-page', 'indicadores' ); ?>

<section class="container-fluid"><div class="wrapper center-block clearfix row">

<div class="col-xs-12">
	<h1>Em construção</h1>
</div>

<div class="col-xs-12 col-sm-5">
<p>
	O novo Sistema Nacional de Informações e Indicadores Culturais irá agregar outras plataformas em breve. As publicações estarão reunidas em um repositório de pesquisas, artigos, estudos, produtos de consultorias e outras informações relevantes. O conteúdo será trabalhado por meio do vocabulário, espaço para publicação de taxonomias e ontologias da cultura. Os dados estarão todos abertos e de forma transparente o que permitirá a construção de painéis de visualização de indicadores. Aguarde!
</p>
</div>

<div class="col-xs-12 col-sm-6 col-sm-offset-1 plataformas">
	<ul class="list-unstyled">
		<li><a href="<?php echo site_url('publicacoes'); ?>"><h3>
			<?php include get_template_directory() . '/assets/sub.glyph.publicacoes.svg'; ?>
			Publicações<span class="hidden-xs">.cultura.gov.br</span></h3></a></li>
		<li><a href="<?php echo site_url('dados'); ?>"><h3>
			<?php include get_template_directory() . '/assets/sub.glyph.dados.svg'; ?>
			Dados<span class="hidden-xs">.cultura.gov.br</span></h3></a></li>
		<li><a href="<?php echo site_url('vocabulario'); ?>"><h3>
			<?php include get_template_directory() . '/assets/sub.glyph.vocabulario.svg'; ?>
			Vocabulários<span class="hidden-xs">.cultura.gov.br</span></h3></a></li>
	</ul>
</div>

</div></section>

<style>
	main nav {
		display: none;
	}
</style>

<?php query_posts( 'posts_per_page=4' ); ?>

<main class="container-fluid noticias" id="main" role="main"><div class="wrapper center-block clearfix row">
	<header class="col-xs-12">
		<h1>Notícias</h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>/noticias/" class="header-sublink">Veja mais<i class="fa fa-chevron-right after"></i></a>
	</header>
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
		<?php get_template_part( 'content/content', 'listing' ); ?>
	</div>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
