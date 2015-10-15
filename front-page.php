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
	<div class="col-xs-12">
		<a href=""><button class="btn btn-default center-block">Cadastre-se já!</button></a>
	</div>

	<h1 class="hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<small><?php bloginfo( 'description' ); ?></small></h1>
</div></header>

<section class="container-fluid velho-sniic"><div class="wrapper center-block clearfix row">
<aside class="clearfix">
	<img class="center-block col-xs-offset-1 col-sm-1 col-sm-offset-0" src="<?php echo get_template_directory_uri() ?>/assets/old-logo.svg"/>
	<p class="center-block col-sm-5 text-center">Está procurando seu cadastro no SNIIC ou precisando do número SNIIC? Ele mudou, saiba mais aqui .</p>
	<button class="btn btn-default col-xs-12 col-sm-3 col-sm-offset-1" type="button">Meu número SNIIC</button>
</aside>
</div></section>

<section class="container-fluid busca"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <?php echo get_search_form(); ?>
	</div>
</div></section>

<section class="container-fluid mapas"><div class="wrapper center-block clearfix row">
	<h1 class="brand-heading col-xs-12">
		<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.mapas.svg"/>
		<span>Mapas</span>.cultura.gov.br</h1>
	<p class="col-xs-12 col-sm-6 col-md-4">O Mapas Culturais substituirá o antigo cadastro do Sistema Nacional de Informações e Indicadores Culturais (SNIIC), porém com maior facilidade de uso, mais possibilidades de filtros de busca e integrado a outras bases de dados do MinC, como a Rede Cultura Viva, o Sistema Nacional de Bibliotecas Públicas e o Cadastro Nacional de Museus (este último em breve). </p>
	<p class="col-xs-12 col-sm-6 col-md-4">O SNIIC, Sistema Nacional de Informações e Indicadores Culturais, de criação obrigatória por lei, será um banco de dados de bens, serviços, infraestrutura, investimentos, produção, acesso, consumo, agentes, programas, instituições e gestão cultural, e transparência entre outros, e estará disponível para toda a sociedade.</p>
	<figure class="col-xs-12 col-sm-12 col-md-4">
		<img src="http://lorempixel.com/400/200/sports/Dummy-Text" class="img-responsive">
		<figcaption>Navegue pelo Mapa da Cultura</figcaption>
	</figure>
</div></section>

<section class="container-fluid breve"><div class="wrapper center-block clearfix row">
<h1 class="col-xs-12">Em construção</h1>
<p class="col-xs-12 col-sm-4">
	O novo Sistema Nacional de Informações e Indicadores Culturais irá em breve agregar outras plataformas em breve. As publicações estarão reunidas em um repositório de pesquisas, artigos, estudos, produtos de consultorias e outras informações relevantes. O conteúdo será trabalhado por meio do vocabulário, espaço para publicação de taxonomias e ontologias da cultura. Os dados estarão todos abertos e de forma transparente o que permitirá a construção de painéis de visualização de indicadores. Aguarde!
</p>
<aside class="col-xs-12 col-sm-6 col-sm-offset-2 plataformas">
	<ul>
		<li><a class="brand-heading" href="<?php echo site_url('publicacoes'); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.publicacoes.svg" class="img-responsive"/>
			<span>Publicações</span>.cultura.gov.br</a></li>
		<li><a class="brand-heading" href="<?php echo site_url('indicadores'); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.indicadores.svg" class="img-responsive"/>
			<span>Indicadores</span>.cultura.gov.br</a></li>
		<li><a class="brand-heading" href="<?php echo site_url('dados'); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.dados.svg" class="img-responsive"/>
			<span>Dados</span>.cultura.gov.br</a></li>
		<li><a class="brand-heading" href="<?php echo site_url('vocabulario'); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.vocabulario.svg" class="img-responsive"/>
			<span>Vocabulário</span>.cultura.gov.br</a></li>
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
<?php get_footer(); ?>
