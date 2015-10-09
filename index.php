<?php
/**
 * @package Argent Neue
 */
get_header(); ?>

<section class="container-fluid velho-sniic"><div class="wrapper center-block clearfix row">
<aside class="clearfix">
	<img class="center-block col-xs-offset-1 col-sm-1 col-sm-offset-0" src="<?php echo get_template_directory_uri() ?>/assets/old-logo.svg"/>
	<p class="center-block col-sm-5 text-center">Nunc diam velit, adipiscing ut tristique vitae, sagittis vel odio. Maecenas convallis ullamcorper ultricies.</p>
	<button class="btn btn-default col-xs-12 col-sm-3 col-sm-offset-1" type="button">Cadastro SNIIC</button>
</aside>
</div></section>

<section class="container-fluid busca"><div class="wrapper center-block clearfix row">
	<div class="input-group col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <?php echo get_search_form(); ?>
	</div>
</div></section>

<section class="container-fluid mapas"><div class="wrapper center-block clearfix row">
	<h1 class="brand-heading col-xs-12">
		<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.mapas.svg"/>
		<span>Mapas</span>.cultura.gov.br</h1>
	<p class="col-xs-12 col-sm-6 col-md-4">Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. </p>
	<p class="col-xs-12 col-sm-6 col-md-4">Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
	<figure class="col-xs-12 col-sm-12 col-md-4">
		<img src="http://lorempixel.com/400/200/sports/Dummy-Text" class="img-responsive">
		<figcaption>Donec ut libero sed arcu vehicula ultricies a non tortor.</figcaption>
	</figure>
</div></section>

<section class="container-fluid breve"><div class="wrapper center-block clearfix row">
<div class="col-xs-12 col-sm-5">
	<h1>Em contrução</h1>
	<p class="col-sm-offset-1">Vivamus fermentum semper porta. Nunc diam velit, adipiscing ut tristique vitae, sagittis vel odio. Maecenas convallis ullamcorper ultricies. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, id fringilla sem nunc vel mi. Nam dictum, odio nec pretium volutpat, arcu ante placerat erat, non tristique elit urna et turpis. Quisque mi metus, ornare sit amet fermentum et, tincidunt et orci. Fusce eget orci a orci congue vestibulum.</p>
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
