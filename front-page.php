<?php /* Template Name: Início */ ?>
<?php get_header(); ?>

<header class="container-fluid"><div class="wrapper center-block clearfix row">
	<div id="branding_simple" class="visible-xs center-block">
		<img src="<?php echo get_template_directory_uri() ?>/assets/main.acro.simple.svg" class="img-responsive"/>
	</div>
	<div id="branding" class="hidden-xs center-block">
		<img src="<?php echo get_template_directory_uri() ?>/assets/main.acro.svg" class="img-responsive"/>
	</div>

	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center quotes">
	<h3>Conheça e explore a nova plataforma</h3>
	</div>

	<div class="col-xs-12">
		<a class="button center-block text-center" href="<?php echo MAPAS_URL; ?>/painel">Cadastre-se</a>
	</div>

	<h1 class="hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1>
</div></header>

<section class="container-fluid velho-sniic"><div class="wrapper center-block clearfix row">
<aside class="clearfix">
	<div class="col-xs-12 col-sm-2 col-sm-offset-0">
		<img class="center-block" src="<?php echo get_template_directory_uri() ?>/assets/old-logo.svg"/>
	</div>
	<p class="col-xs-12 col-sm-5 col-sm-offset-1 text-center">
		Está procurando seu cadastro no SNIIC ou precisando do número SNIIC? Ele mudou, saiba mais aqui.
	</p>
	<div class="col-xs-12 col-sm-3 col-sm-offset-1">
		<a href="<?php echo site_url('novo-cadastro-sniic'); ?>"><button class="btn btn-default center-block">Meu número SNIIC</button></a>
	</div>
</aside>
</div></section>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <?php echo get_search_form(); ?>
	</div>
</div></section>

<?php get_template_part( 'front-page/front-page', 'mapas' ); ?>

<section class="container-fluid breve"><div class="wrapper center-block clearfix row">
<h1 class="col-xs-12">Em construção</h1>
<p class="col-xs-12 col-sm-4">
	O novo Sistema Nacional de Informações e Indicadores Culturais irá agregar outras plataformas em breve. As publicações estarão reunidas em um repositório de pesquisas, artigos, estudos, produtos de consultorias e outras informações relevantes. O conteúdo será trabalhado por meio do vocabulário, espaço para publicação de taxonomias e ontologias da cultura. Os dados estarão todos abertos e de forma transparente o que permitirá a construção de painéis de visualização de indicadores. Aguarde!
</p>
<aside class="col-xs-12 col-sm-6 col-sm-offset-2 plataformas">
	<ul>
		<li><a class="brand-heading" href="<?php echo site_url('publicacoes'); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.publicacoes.svg" class="img-responsive"/>
			Publicações<span>.cultura.gov.br</span></a></li>
		<li><a class="brand-heading" href="<?php echo site_url('indicadores'); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.indicadores.svg" class="img-responsive"/>
			Indicadores<span>.cultura.gov.br</span></a></li>
		<li><a class="brand-heading" href="<?php echo site_url('dados'); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.dados.svg" class="img-responsive"/>
			Dados<span>.cultura.gov.br</span></a></li>
		<li><a class="brand-heading" href="<?php echo site_url('vocabulario'); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.vocabulario.svg" class="img-responsive"/>
			Vocabulário<span>.cultura.gov.br</span></a></li>
	</ul>
</aside>
</div></section>

<?php get_template_part( 'front-page/front-page', 'noticias' ); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
