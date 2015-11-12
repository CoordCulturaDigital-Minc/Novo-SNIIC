<?php
/**
 * The template for displaying all single posts.
 *
 * @package Argent
 */

get_header(); ?>

<main id="main" class="site-main" role="main"><div class="wrapper center-block">

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content/content', 'single' ); ?>

	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>

	<?php the_post_navigation(); ?>

<?php endwhile; // end of the loop. ?>

</div></main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
