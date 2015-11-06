<?php $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true ); ?>
<?php $next     = get_adjacent_post( false, '', false ); ?>
<?php if ( ! $next && ! $previous ) return; ?>

<nav>
  <h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'argent' ); ?></h2>
  <ul>

    <?php if ($previous) : ?>
    <li class="previous col-xs-12 col-sm-6">
      <span>Anterior</span><?php previous_post_link( '%link', '%title' ); ?>
    </li>
    <?php endif;?>

    <?php if ($next) : ?>
    <li class="next col-xs-12 col-sm-6">
      <span>Próximo</span><?php next_post_link( '%link', '%title' ); ?>
    </li>
    <?php endif;?>

  </ul>
</nav>
