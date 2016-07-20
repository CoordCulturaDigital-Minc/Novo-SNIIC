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
<!--
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
-->

<main class="container-fluid page frameless" role="main">

		<?php the_content(); ?>

</main>

<?php get_template_part( 'front-page/front-page', 'mapas' ); ?>

<section class="container-fluid"><div class="wrapper center-block clearfix row">

<div class="col-xs-12 col-sm-5">


		<a href="<?php echo site_url('indicadores'); ?>"><h3>
			<?php include get_template_directory() . '/assets/sub.glyph.indicadores.svg'; ?>
			Indicadores<span class="hidden-xs">.cultura.gov.br</span></h3></a>
			
			<p>O portal de Indicadores pretende apresentar informações públicas do setor cultural de maneira simples e intelegível. A proposta é criar painéis de acompanhamento de políticas do Ministério, apresentando por meio de gráficos e infográficos informações publicadas de maneira integral no portal de <a href="http://dados.cultura.gov.br">dados abertos da cultura</a>. Além disso procuraremos reunir outras informações relevantes sobre o setor cultural, como números sobre comércio exterior de bens e serviços culturais.</p>
			
		<a href="http://dados.cultura.gov.br"><h3>
			<?php include get_template_directory() . '/assets/sub.glyph.dados.svg'; ?>
			Dados<span class="hidden-xs">.cultura.gov.br</span></h3></a>
			
			<p>O portal de dados abertos, ainda em fase de implantação, reunirá dados brutos sobre a gestão do Ministério da Cultura, seus programas e projetos.</p>


</div>

<div class="col-xs-12 col-sm-6 col-sm-offset-1 plataformas">
	
		
		<a href="http://vocabularios.cultura.gov.br"><h3>
			<?php include get_template_directory() . '/assets/sub.glyph.vocabularios.svg'; ?>
			Vocabulários<span class="hidden-xs">.cultura.gov.br</span></h3></a>
			
			<p>Nesta seção estamos documentando o processo de construção da Ontologia para gestão cultural, que irá orientar todos os sistemas de informação do Ministério da Cultura e se apresentará como um padrão, construído e gerido colaborativamente, para todos que trabalham com informações e indicadores culturais.</p>
	
		
		<a href="<?php echo site_url('publicacoes'); ?>"><h3>
			<?php include get_template_directory() . '/assets/sub.glyph.publicacoes.svg'; ?>
			Publicações<span class="hidden-xs">.cultura.gov.br</span></h3></a>
			
			<p>A área de Publicações se propõe a reunir pesquisas, artigos, estudos, produtos de consultorias e outras publicações que tragam informações e indicadores culturais. Entre em contato caso queira que sua publicação seja incluída neste repositório.</p>
			
		
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
