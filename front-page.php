<?php
/**
 * @package Argent Neue
 */
get_header(); ?>

<section class="container-fluid velho-sniic"><div class="wrapper center-block clearfix row">
<aside class="clearfix">
	<img class="center-block col-xs-offset-1 col-sm-1 col-sm-offset-0" src="<?php echo get_template_directory_uri() ?>/assets/old-logo.svg"/>
	<p class="center-block col-sm-5 text-center">Conheça e explore a nova plataforma do Sistema Nacional de Informações e Indicadores Culturais .</p>
	<button class="btn btn-default col-xs-12 col-sm-3 col-sm-offset-1" type="button">Cadastro SNIIC</button>
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
	<p class="col-xs-12 col-sm-6 col-md-4">Substituirá o antigo cadastro do SNIIC, porém com maior facilidade de uso, mais possibilidades de filtros de busca e integrado a outras bases de dados do MinC, como a Rede Cultura Viva, o Sistema Nacional de Bibliotecas Públicas e o Cadastro Nacional de Museus (este último em breve).. </p>
	<p class="col-xs-12 col-sm-6 col-md-4">Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
	<figure class="col-xs-12 col-sm-12 col-md-4">
		<img src="http://lorempixel.com/400/200/sports/Dummy-Text" class="img-responsive">
		<figcaption>Navegue pelo Mapa da Cultura</figcaption>
	</figure>
</div></section>

<section class="container-fluid breve"><div class="wrapper center-block clearfix row">
<div class="col-xs-12 col-sm-5">
	<h1>Em contrução</h1>
	<p class="col-sm-offset-1">Indicadores.cultura: Painéis de visualização de indicadores, na forma de gráficos e tabelas, de políticas ou informações culturais. O primeiro painel lançado será com os dados do programa Vale Cultura, que trará informações sempre atualizadas sobre a distribuição e utilização deste benefício. Em seguida publicaremos um painel com dados da Lei Rouanet e outro com as informações das pesquisas de Perfis de Municípios (MUNIC) realizada pelo IBGE e que terá sua nova edição lançada no final deste ano.</p>
	<p class="col-sm-offset-1">Publicações.cultura: Repositório de pesquisas, artigos, estudos, produtos de consultorias e muitas outras publicações de interesse sobre indicadores e informações culturais relevantes para as políticas culturais.</p>
	<p class="col-sm-offset-1">Vocabulario.cultura: Espaço para publicação das taxonomias e ontologias da cultura. A proposta, em andamento através de um Grupo de Trabalho (GT) e de uma parceria com a Universidade Federal de Goiânia (UFG), é consolidar este vocabulário, para ser utilizado por todos os módulos do SNIIC e também para servir de recomendação para pesquisadores e gestores que queiram desenvolver outros sistemas culturais. Estes vocabulários serão publicados em formato de fácil compreensão, assim como em formatos da web semântica.</p>
	<p class="col-sm-offset-1">Dados.cultura: Portal de dados abertos, nos mesmos moldes do dados.gov.br </p>

</div>
<aside class="col-xs-12 col-sm-5 col-sm-offset-1 plataformas">
	<ul>
		<li><a class="brand-heading" href="/">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.indicadores.svg" class="img-responsive"/>
			<span>Indicadores</span>.cultura.gov.br</a></li>
		<li><a class="brand-heading" href="/">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.dados.svg" class="img-responsive"/>
			<span>Dados</span>.cultura.gov.br</a></li>
		<li><a class="brand-heading" href="/">
			<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.publicacoes.svg" class="img-responsive"/>
			<span>Publicações</span>.cultura.gov.br</a></li>
		<li><a class="brand-heading" href="/">
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
