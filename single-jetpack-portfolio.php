<?php
/**
 * The Template for displaying single projects.
 *
 * @package Argent
 */

get_header(); ?>

<main id="main" class="site-main" role="main"><div class="wrapper center-block">

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content/content', 'portfolio-single' ); ?>

	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
	?>

<?php endwhile; // end of the loop. ?>

<?php get_template_part( 'content/content', 'navigation' ); ?>

</div></main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
