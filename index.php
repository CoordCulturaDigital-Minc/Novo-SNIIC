<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Argent
 */

get_header(); ?>

<main class="container-fluid" id="main" role="main"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<header>
			<h1>Notícias</h1>
		</header>

		<?php get_template_part( 'content/content', 'listing' ); ?>
	</div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
