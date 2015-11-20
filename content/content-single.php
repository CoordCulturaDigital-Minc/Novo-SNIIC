<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) : ?>

    <div class="img-clipper center-block">

      <?php the_post_thumbnail( 'argent-blog-thumbnail' ); ?>

    </div>

  <?php endif; ?>


  <div class="col-xs-12 col-sm-8 col-sm-offset-2">

    <header>

      <h1><?php the_title(); ?></h1>

      <div class="meta">

        <?php if ( 'post' == get_post_type() ) : ?>
            <?php argent_posted_on(); ?>
        <?php endif; ?>

        <?php argent_entry_meta(); ?>

      </div>

    </header>

    <div class="content">

      <?php the_content(); ?>

    </div>

  </div>
</article>
