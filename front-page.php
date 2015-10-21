<?php
/**
 * @package Argent Neue
 */
get_header(); ?>

<header class="container-fluid"><div class="wrapper center-block clearfix row">
	<div id="branding_simple" class="visible-xs center-block">
		<img src="<?php echo get_template_directory_uri() ?>/assets/main.acro.simple.svg" class="img-responsive"/>
	</div>
	<div id="branding" class="hidden-xs center-block">
		<img src="<?php echo get_template_directory_uri() ?>/assets/main.acro.svg" class="img-responsive"/>
	</div>

	<h3 class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center quotes">
		Conheça e explore a nova plataforma
	</h3>
	<br>
	<br>
	<div class="col-xs-12">
		<a href="<?php echo MAPAS_URL; ?>/painel"><button class="btn btn-primary btn-cadastre-se center-block">Cadastre-se</button></a>
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

<section class="container-fluid mapas"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12">
	<h1 class="brand-heading">
		<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.mapas.svg"/>
		Mapas<span class="hidden-xs">.cultura.gov.br</span></h1>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4">
	<p>
		O Mapas Culturais substituirá o antigo cadastro do Sistema Nacional de Informações e Indicadores Culturais (SNIIC), porém com maior facilidade de uso, mais possibilidades de filtros de busca e integrado a outras bases de dados do MinC, como a Rede Cultura Viva, o Sistema Nacional de Bibliotecas Públicas e o Cadastro Nacional de Museus (este último em breve).</p>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-4">
	<a href="<?php echo MAPAS_URL; ?>"><figure>
		<img src="<?php echo get_template_directory_uri() ?>/assets/thumbMapas.png" class="img-responsive">
		<figcaption>Navegue pelo Mapa da Cultura</figcaption>
	</figure></a>
	</div>

	<div class="counters">
		<h2 class="hidden">Explore</h2>
		<ul class="center-block text-center">
			<div class="col-xs-6 col-sm-3 col-md-offset-2">
			<a class="center-block" href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(agent:!t),filterEntity:agent))">
			<li><i class="fa fa-user center-block"></i>
			<h3 id="counter-agent"><span class="buscando">…</span><small>Agentes</small></h3></li></a>
			</div>

			<div class="col-xs-6 col-sm-3">
			<a class="center-block" href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(space:!t),filterEntity:space))">
			<li><i class="fa fa-building-o center-block"></i>
			<h3 id="counter-space"><span class="buscando">…</span><small>Espaços</small></h3></li></a>
			</div>

			<div class="col-xs-6 col-sm-3">
			<a class="center-block" href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(project:!t),filterEntity:project))">
			<li><i class="fa fa-file-o center-block"></i>
			<h3 id="counter-project"><span class="buscando">…</span><small>Projetos</small></h3></li></a>
			</div>

			<div class="col-xs-6 col-sm-3">
			<a class="center-block" href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(project:!t),filterEntity:project))">
			<li><i class="fa fa-calendar center-block"></i>
			<h3 id="counter-event"><span class="buscando">…</span><small>Eventos</small></h3></li></a>
			</div>
		</ul>
	</div>
</div></section>

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

<main id="main" class="site-main container-fluid" role="main"><div class="wrapper center-block clearfix row">
<h1 class="col-xs-12">Notícias</h1>

<section class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
			/* Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'content/content', get_post_format() );
		?>
	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

<?php else : ?>

	<?php get_template_part( 'content/content', 'none' ); ?>

<?php endif; ?>
</section>

</div></main>

<?php get_sidebar(); ?>

<script>
jQuery(document).ready(function($) {
	$.getJSON('<?php echo MAPAS_URL; ?>/api/agent/find?@select=id&@count=1', function(x) {
			if (typeof(x) == 'number')
				$('#counter-agent span.buscando').text(x).removeClass('buscando');
	});
	$.getJSON('<?php echo MAPAS_URL; ?>/api/space/find?@select=id&@count=1', function(x) {
			if (typeof(x) == 'number')
				$('#counter-space span.buscando').text(x).removeClass('buscando');
	});
	$.getJSON('<?php echo MAPAS_URL; ?>/api/project/find?@select=id&@count=1', function(x) {
			if (typeof(x) == 'number')
				$('#counter-project span.buscando').text(x).removeClass('buscando');
	});
});
</script>

<?php get_footer(); ?>
