<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) : ?>

    <div class="img-clipper center-block">

      <?php the_post_thumbnail( 'argent-blog-thumbnail' ); ?>

    </div>

  <?php endif; ?>


  <div class="col-xs-12 col-sm-8 col-sm-offset-2">

    <header>

      <h1><?php the_title(); ?></h1>

    </header>

    <div class="content">

      <?php the_content(); ?>

    </div>

    <footer class="clearfix">
      <?php if ( 'post' == get_post_type() ) : ?>
          <?php argent_posted_on(); ?>
      <?php endif; ?>

      <?php argent_entry_meta(); ?>
    </footer>

  </div>
</article>

<div class="col-xs-12 col-sm-8 col-sm-offset-2">

  <?php get_template_part( 'content/content', 'navigation' ); ?>

  <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>

</div>
