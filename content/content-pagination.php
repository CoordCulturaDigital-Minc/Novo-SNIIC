<?php if ( $GLOBALS['wp_query']->max_num_pages < 2 ) return; ?>

<nav class="navigation posts-navigation" role="navigation">
  <h2 class="sr-only"><?php esc_html_e( 'Posts navigation', 'argent' ); ?></h2>
  <div class="nav-links">

    <?php if ( get_next_posts_link() ) : ?>
      <div class="nav-previous"><?php next_posts_link( '<i class="fa fa-arrow-left"></i>' ); ?></div>
    <?php endif; ?>

    <?php if ( get_previous_posts_link() ) : ?>
      <div class="nav-next"><?php previous_posts_link( '<i class="fa fa-arrow-right"></i>' ); ?></div>
    <?php endif; ?>

  </div>
</nav>
