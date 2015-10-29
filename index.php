<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Argent
 */

get_header(); ?>

<style>
	a.header-sublink {
		display: none;
	}
</style>

<?php get_template_part( 'content/content', 'listing' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
