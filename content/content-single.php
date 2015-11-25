<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) : ?>

    <div class="img-clipper center-block">

      <?php the_post_thumbnail( 'argent-blog-thumbnail' ); ?>

    </div>

  <?php endif; ?>


  <div class="col-xs-12 col-sm-8 col-sm-offset-2">

    <header>

      <h1><?php the_title(); ?>
        <span class="edit-link"><?php edit_post_link( '<i class="fa fa-pencil-square-o"></i>' ); ?></span>
      </h1>

      <div class="meta">

        <?php if ( 'post' == get_post_type() ) : ?>
            <?php get_template_part( 'content/content', 'post-date' ); ?>
        <?php endif; ?>

        <?php get_template_part( 'content/content', 'meta' ); ?>

      </div>

    </header>

    <div class="content">

      <?php the_content(); ?>

    </div>

  </div>
</article>
