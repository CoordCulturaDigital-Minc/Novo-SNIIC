<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="clearfix">
    <div class="taxonomies pull-left">
    <?php
      $args = array(
          'before' => '<p class="entry-meta">',
          'after' => '</p>',
          'template' => '%1$s: %2$l'
      );
    ?>
    <?php the_taxonomies($args); ?>
    </div>
    <div class="pubdate pull-right">
      <p class="entry-meta">Publicação: <a href="">2008</a></p>
    </div>
  </header>

  <a class="" href="<?php the_permalink(); ?>">
    <div class="media row">
      <?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) : ?>
        <div class="media-left"><div class="img-clipper center-block">
          <?php the_post_thumbnail( 'argent-blog-thumbnail' ); ?>
        </div></div>
      <?php endif; ?>

      <div class="media-right">
        <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>

        <?php the_excerpt(); ?>
      </div>
    </div>
  </a>

  <?php if ( the_fonte_link() != '' || the_pdf_link() != ''  ) : ?>
    <footer class="clearfix">
      <a class="pull-left" href="<?php echo the_fonte_link(); ?>">
        <section class="actions"><span>Fonte: </span><?php echo the_fonte_name(); ?></section>
      </a>
      <a class="pull-right download" href="<?php echo the_pdf_link(); ?>">
        <section class="actions">Baixar PDF<i class="fa fa-arrow-circle-o-down"></i></section>
      </a>
    </footer>
  <?php endif; ?>

</article>
