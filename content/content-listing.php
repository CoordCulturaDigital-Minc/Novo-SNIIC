<div class="content-listing">

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part ('content/content', get_post_format()); ?>

	<?php endwhile; ?>

	<?php get_template_part( 'content/content', 'pagination' ); ?>

<?php else : ?>

	<?php get_template_part( 'content/content', 'none' ); ?>

<?php endif; ?>

</div>
