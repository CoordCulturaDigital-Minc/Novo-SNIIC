<?php

// Hide category and tag text for pages.
if ( 'post' == get_post_type() ) {
  /* translators: used between list items, there is a space after the comma */
  $categories_list = get_the_category_list( __( ', ', 'argent' ) );
  if ( $categories_list && argent_categorized_blog() ) {
    printf( '<span class="cat-links"><i class="fa fa-folder-open-o before"></i>' . $categories_list . '</span>');
  }

  /* translators: used between list items, there is a space after the comma */
  $tags_list = get_the_tag_list( '', __( ', ', 'argent' ) );
  if ( $tags_list ) {
    printf( '<span class="tags-links"><i class="fa fa-tags before"></i>' . $tags_list . '</span>');
  }
}

if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
  echo '<span class="comments-link">';
  comments_popup_link( esc_html__( 'Leave a comment', 'argent' ), esc_html__( '1 Comment', 'argent' ), esc_html__( '% Comments', 'argent' ) );
  echo '</span>';
}
