<?php $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true ); ?>
<?php $next     = get_adjacent_post( false, '', false ); ?>
<?php if ( ! $next && ! $previous ) return; ?>

<nav class="row hidden">
  <h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'argent' ); ?></h2>

  <ul class="list-unstyled clearfix">

    <?php if ($previous) : ?>
    <li class="previous col-xs-12 col-sm-6">
      <span>Anterior</span>
      <h4><?php previous_post_link( '%link', '%title' ); ?></h4>
    </li>
    <?php endif;?>

    <?php if ($next) : ?>
    <li class="next col-xs-12 col-sm-6">
      <span>Próximo</span>
      <h4><?php next_post_link( '%link', '%title' ); ?></h4>
    </li>
    <?php endif;?>

  </ul>

</nav>
