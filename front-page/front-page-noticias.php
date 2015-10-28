<?php query_posts( 'posts_per_page=4' ); ?>
<?php if ( $wp_query->post_count == 0 ) return; ?>

<main class="container-fluid noticias" id="main" role="main"><div class="wrapper center-block clearfix row">
	<header class="col-xs-12">
		<h1>Notícias</h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>/noticias/" class="header-sublink">Veja mais<i class="fa fa-chevron-right"></i></a>
	</header>

	<div class="col-xs-12 col-sm-8 col-sm-offset-2">

	<?php the_post(); ?>
	<?php get_template_part ('content/content', 'stiky'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content/content', get_post_format() ); ?>
	<?php endwhile; endif; ?>

	</div>
</div></main>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$('article .img-wrapper').find('img').each(function() {
			var imgClass = (this.width / this.height > 1) ? 'wide' : 'tall';
			$(this).addClass(imgClass);
	})
})
</script>
