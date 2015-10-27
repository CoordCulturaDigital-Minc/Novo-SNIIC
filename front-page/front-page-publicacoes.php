<?php if( get_post_type() == 'publicacoes' ) : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="clearfix">
    <div class="taxonomies">
    <?php
      $args = array(
          'before' => '<p class="entry-meta">',
          'after' => '</p>',
          'template' => '%1$s: %2$l'
      );
    ?>
    <?php the_taxonomies($args); ?>
    </div>
    <div class="pubdate">
      <p class="hidden entry-meta">Publicação: <a href="">2008</a></p>
    </div>
  </header>

  <a class="" href="<?php the_permalink(); ?>">
    <section class="title">
      <div class="img-wrapper">
        <?php the_post_thumbnail( 'argent-blog-thumbnail', array( 'class' => 'img-responsive' ) ); ?>
      </div>

      <header>
      	<h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <section>
      	<?php the_excerpt(); ?>
      </section>
    </section>
  </a>

  <?php
    $fonte = the_fonte_link();
    $pdf = the_pdf_link();
  ?>
  <footer class="row">
  <?php if ( $fonte != '' && $pdf != ''  ) : ?>
    <a class="col-xs-6 text-center" href="<?php echo the_fonte_link(); ?>">
      <section class="actions"><span>Fonte: </span><?php echo the_fonte_name(); ?></section>
    </a>
    <a class="col-xs-6 text-center download" href="<?php echo the_pdf_link(); ?>">
      <section class="actions">Baixar PDF<i class="fa fa-arrow-circle-o-down"></i></section>
  <?php elseif ( $fonte != '' && $pdf == '' ) : ?>
    <a class="col-xs-12 text-center" href="<?php echo the_fonte_link(); ?>">
      <section class="actions"><span>Fonte: </span><?php echo the_fonte_name(); ?></section>
  <?php elseif ( $fonte == '' && $pdf != '' ) : ?>
    <a class="col-xs-12 text-center download" href="<?php echo the_pdf_link(); ?>">
      <section class="actions">Baixar PDF<i class="fa fa-arrow-circle-o-down"></i></section>
  <?php endif; ?>
  </a>
  </footer>

</article>

<?php endif; ?>
