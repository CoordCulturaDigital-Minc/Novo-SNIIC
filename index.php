<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Argent
 */

get_header(); ?>

<main class="container-fluid noticias" id="main" role="main"><div class="wrapper center-block clearfix row">

<?php if ( have_posts() ) : ?>

	<header class="col-xs-12">
		<h1>Notícias</h1>
	</header>

	<div class="col-xs-12 col-sm-8 col-sm-offset-2 sticky-column">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	</div>

<?php else : ?>

	<?php get_template_part( 'content/content', 'none' ); ?>

<?php endif; ?>

</div></main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
