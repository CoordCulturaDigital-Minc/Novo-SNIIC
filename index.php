<?php
/**
 * @package Argent Neue
 */
get_header(); ?>

<section class="container-fluid numero-sniic"><div class="wrapper center-block clearfix row">
	<img class="col-sm-2 col-md-2 center-block" style="width:180px;height:180px;">
	<h4 class="col-xs-12 col-sm-4 col-md-3">Procurando o número Sniic?</h4>
	<button class="col-xs-12 col-sm-4 btn btn-default" type="button">Cadastro SNIIC</button>
</div></section>

<section class="container-fluid busca"><div class="wrapper center-block clearfix row">
	<div class="input-group col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
		<input type="text" class="form-control" placeholder="Maecenas convallis ullamcorper ultricies?">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</button>
		</span>
	</div>
</div></section>

<section class="container-fluid mapas"><div class="wrapper center-block clearfix row">
	<h1 class="brand-heading">
		<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.mapas.svg"/>
		<span>Mapas</span>.cultura.gov.br</h1>
</div></section>

<main id="main" class="site-main" role="main"><div class="wrapper center-block">

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

</div></main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
