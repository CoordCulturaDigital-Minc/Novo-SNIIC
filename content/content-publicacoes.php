<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <footer class="clearfix">
    <div class="pull-left">
      <?php argent_entry_meta(); ?>
    </div>
    <div class="pubdate pull-right">
      <span class="entry-meta">Publicação: <a href=""><?php echo the_fonte_ano(); ?></a></span>
    </div>
  </footer>

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
      <div class="pull-left">
        <p>Fonte: <a href="<?php echo the_fonte_link(); ?>"><?php echo the_fonte_name(); ?></a></p>
      </div>
      <div class="pull-right">
        <p><a href="<?php echo the_pdf_link(); ?>">Baixar PDF<i class="fa fa-arrow-circle-o-down"></i></a></p>
      </div>
    </footer>
  <?php endif; ?>

</article>
