<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <a href="<?php the_permalink(); ?>">
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

  <footer class="clearfix">

      <div class="pull-left col-xs-6">
        <?php if ( 'post' == get_post_type() ) : ?><?php get_template_part( 'content/content', 'post-date' ); ?>
        <?php else: ?>
          <?php if ( the_fonte_ano() != '') : ?><span><i class="fa fa-calendar before"></i><a href=""><?php echo the_fonte_ano(); ?></a></span><?php endif; ?>
          <?php if ( the_fonte_link() != '') : ?><span><i class="fa fa-university before"></i><a href="<?php echo the_fonte_link(); ?>"><?php echo the_fonte_name(); ?></a><span><?php endif; ?>
        <?php endif; ?>
      </div>

      <div class="pull-right col-xs-6 text-right">
        <?php if ( the_pdf_link() != '') : ?><span><i class="fa fa-arrow-circle-o-down before"></i><a href="<?php echo the_pdf_link(); ?>">Baixar PDF</a></span><?php endif; ?>
        <?php get_template_part( 'content/content', 'meta' ); ?>
      </div>

  </footer>

</article>
