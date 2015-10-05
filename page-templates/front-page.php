<?php
/**
 * Template Name: Front Page
 *
 * @package Argent
 */

$front_portfolio = get_theme_mod( 'argent_front_portfolio', 1 );

get_header(); ?>

<main id="main" class="site-main" role="main"><div class="wrapper center-block">

<?php while ( have_posts() ) : the_post(); ?>
	<?php if ( '' != get_the_content() ) : ?>
	<div class="page-content">
		<?php the_content(); ?>
	</div>
	<?php endif; ?>
<?php endwhile; // end of the loop. ?>

<?php
	if ( 1 == $front_portfolio ) :
		get_template_part( 'content/content', 'front-portfolio' );
	endif;
?>

</div></main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
