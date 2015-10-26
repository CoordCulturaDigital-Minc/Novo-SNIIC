<a href="<?php the_permalink(); ?>">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="img-wrapper">
      <?php the_post_thumbnail( 'argent-blog-thumbnail', array( 'class' => 'img-responsive' ) ); ?>
    </div>

    <header>
    	<h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <section>
    	<?php the_excerpt(); ?>
    </section>
  </article>
</a>
