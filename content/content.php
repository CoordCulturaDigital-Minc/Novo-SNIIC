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
    <?php if ( 'post' == get_post_type() ) : ?>
      <div class="pull-left">
        <?php argent_posted_on(); ?>
      </div>
    <?php endif; ?>

		<div class="pull-right">
	     <?php argent_entry_meta(); ?>
		</div>
  </footer>
</article>
