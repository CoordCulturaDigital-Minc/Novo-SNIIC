<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>">
    <div class="media">
      <div class="media-left media-middle"><div class="img-wrapper center-block">
        <?php the_post_thumbnail( 'argent-blog-thumbnail' ); ?>
      </div></div>
      <div class="media-right">
        <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>

        <section>
          <?php the_excerpt(); ?>
        </section>
      </div>
    </div>
  </a>
  <footer>
    <?php if ( 'post' == get_post_type() ) : ?>
      <div class="entry-meta">
        <?php argent_posted_on(); ?>
      </div>
    <?php endif; ?>

    <?php
      $args = array(
          'before' => '<p class="entry-meta">',
          'after' => '</p>',
          'template' => '%1$s: %2$l'
      );
    ?>
    <?php the_taxonomies($args); ?>
  </footer>
</article>
