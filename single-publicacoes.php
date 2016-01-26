<?php get_header(); ?>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-10">
    <a href="/publicacoes">
		<h1 class="brand-heading">
			<?php include get_template_directory() . '/assets/sub.glyph.publicacoes.svg'; ?>Publicações<span class="hidden">.cultura.gov.br</span></h1>
    </a>
	</div>
</div></section>

<main class="single" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="wrapper center-block clearfix row">

			<?php get_template_part( 'content/content', 'single' ); ?>

			<div class="col-xs-12 col-sm-8 col-sm-offset-2">

			  <?php get_template_part( 'content/content', 'navigation' ); ?>

			  <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>

			</div>

		</div>

	<?php endwhile;?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
