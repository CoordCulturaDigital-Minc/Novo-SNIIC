<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Argent
 */

get_header(); ?>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-6">
		<h1 class="brand-heading">Notícias</h1>
	</div>
</div></section>

<main class="container-fluid noticias" id="main" role="main"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<?php get_template_part( 'content/content', 'listing' ); ?>
	</div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
