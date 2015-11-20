<?php get_header(); ?>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-6">
		<h1 class="brand-heading"><?php the_title(); ?></h1>
	</div>
</div></section>

<main class="page" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="wrapper center-block clearfix row">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="col-xs-12 col-sm-8 col-sm-offset-2">

		    <div class="content">

		      <?php the_content(); ?>

		    </div>

			</div>

		</article>

		<div class="col-xs-12 col-sm-8 col-sm-offset-2 hidden">

			<?php get_template_part( 'content/content', 'navigation' ); ?>

			<?php if ( comments_open() || get_comments_number() ) comments_template(); ?>

		</div>

		</div>

	<?php endwhile; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
