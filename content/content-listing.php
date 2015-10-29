<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php if (get_post_type() == 'publicacoes') : ?>
			<?php get_template_part ('content/content', get_post_type()); ?>
		<?php else: ?>
			<?php get_template_part ('content/content', get_post_format()); ?>
		<?php endif; ?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

<?php else : ?>

	<?php get_template_part( 'content/content', 'none' ); ?>

<?php endif; ?>

<script type="text/javascript">

jQuery(document).ready(function($) {
	$('article .img-clipper img').each(function() {
		var imgRatio = ($(this).attr('width')/$(this).attr('height'));
		var wrapperRatio = ($(this).parent().width()/$(this).parent().height());
		$(this).addClass((imgRatio > wrapperRatio) ? 'wide' : 'tall');
	});
});

</script>
