<?php /* Template Name: Frameless */ ?>
<?php get_header(); ?>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-6">
		<h1 class="brand-heading"><?php the_title(); ?>
			<span class="edit-link"><?php edit_post_link( '<i class="fa fa-pencil-square-o"></i>' ); ?></span>
		</h1>
	</div>
</div></section>

<main class="page" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="clearfix row">

		<?php the_content(); ?>

		</div>

	<?php endwhile; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
