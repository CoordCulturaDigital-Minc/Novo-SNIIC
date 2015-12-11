<?php /* Template Name: Frameless */ ?>
<?php get_header(); ?>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-10">
		<h1 class="brand-heading"><?php the_title(); ?>
			<span class="edit-link"><?php edit_post_link( '<i class="fa fa-pencil-square-o"></i>' ); ?></span>
		</h1>
	</div>
</div></section>

<main class="container-fluid page frameless" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
