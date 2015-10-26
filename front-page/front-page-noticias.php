<main class="container-fluid noticias" id="main" role="main"><div class="wrapper center-block clearfix row">
	<header class="col-xs-12">
		<h1>Notícias</h1>
		<a href="http://sniic.cultura.gov.br/noticias/" class="header-sublink">Veja mais<i class="fa fa-chevron-right"></i></a>
	</header>

	<?php
	query_posts( 'posts_per_page=3' );

	if ($wp_query->post_count == 0) :
		get_template_part( 'content/content', 'none' );
	elseif ($wp_query->post_count == 1) :
		?><div class="col-xs-12 col-sm-12 sticky-column"><?php
	else :
		?><div class="col-xs-12 col-sm-8 sticky-column"><?php
	endif; ?>

	<?php
	if ( have_posts() ) : the_post();
			get_template_part ('front-page/front-page', 'content');
		?></div><?php
		if ( have_posts() ) :
			?><div class="col-xs-12 col-sm-4 aside-column"><?php
			while ( have_posts() ) : the_post();
				get_template_part ('front-page/front-page', 'content');
			endwhile;
			?></div><?php
		endif;
	endif; ?>
</div></main>
