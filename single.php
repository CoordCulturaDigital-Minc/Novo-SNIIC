<?php
/**
 * The template for displaying all single posts.
 *
 * @package Argent
 */

get_header(); ?>

<main id="main" role="main"><div class="single">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="wrapper center-block clearfix row">

			<?php get_template_part( 'content/content', 'single' ); ?>

		</div>

	<?php endwhile;?>

</div>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
