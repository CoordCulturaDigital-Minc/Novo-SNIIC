<?php if( get_post_type() == 'publicacoes' ) : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php
      $args = array(
          'before' => '<p class="entry-meta">',
          'after' => '</p>',
          'template' => '%1$s: %2$l'
      );
    ?>
    <?php the_taxonomies($args); ?>
  </header>

  <a class="href="<?php the_permalink(); ?>">
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
  <a class="col-xs-6 text-center" href="<?php the_fonte_link(); ?>">
    <section class="actions"><?php the_fonte_name(); ?></section>
  </a>
  <a class="col-xs-6 text-center download" href="<?php the_pdf_link(); ?>">
    <section class="actions">Baixar PDF<i class="fa fa-arrow-circle-o-down"></i></section>
  </a>

</article>

<?php endif; ?>
