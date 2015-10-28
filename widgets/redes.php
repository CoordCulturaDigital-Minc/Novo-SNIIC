<?php
/**
 * Copyright (c) 2015 Tiago Mergulhão
 *
 * Written by Tiago Mergulhão <me@tmergulhao.com>
 *
 * Plugin Name: Argento Neue Netword Anchors
 * Plugin URI:
 * Description: Just a simple login widget for wordpress
 * Author: Tiago Mergulhão
 * Version: 2015.10.28
 * Author URI: http://tmergulhao.com/
 * License: GPL2
 */
class AN_Widget_Network_Anchors extends WP_Widget
{

	function widget ( $args, $instance ) {
		extract( $args );

		print $before_widget;

		if ( is_user_logged_in() ) {
            global $user_ID;
            $user_meta = array_map( function( $a ){ return $a[0]; }, get_user_meta( $user_ID ) );

            printf( '<h3 class="widget__title">' . __('Olá, %s!', 'historias' ) . '</h3>', user_short_name());
        } else {
            if( !empty( $instance[ 'title' ] ) )
            {
                // print $before_head;
                print $before_title . $instance[ 'title' ] . $after_title;
                // print $after_head;
            }
        }
        echo '<div class="widget-body">';?>
          <div class="col-xs-12 col-sm-4 col-md-4">
        		<aside class="redes-sociais">
        			<h4>Redes</h4>
        			<ul>
        				<li><a href="https://github.com/CoordCulturaDigital-MinC/"><i class="fa fa-github-alt"></i>/CoordCulturaDigital-MinC</a></li>
        				<li><a href="https://www.youtube.com/user/ministeriodacultura/"><i class="fa fa-youtube-play"></i>/ministeriodacultura</a></li>
        				<li><a href="https://www.facebook.com/MinisterioDaCultura"><i class="fa fa-facebook-official"></i>/MinisterioDaCultura</a></li>
        				<li><a href="https://instagram.com/culturagovbr/"><i class="fa fa-instagram"></i>/culturagovbr</a></li>
        				<li><a href="https://twitter.com/culturagovbr/"><i class="fa fa-twitter"></i>/culturagovbr</a></li>
        			</ul>
        		</aside>
        	</div>
        <?php
        echo '</div>';

		echo $after_widget;
	}

  function update ( $new_instance, $old_instance ) {
      $instance = $old_instance;

      if( $instance != $new_instance )
      {
          $instance = $new_instance;
      }
      return $instance;
  }

  function form ( $instance ) {
      $defaults = array(
          'title' => 'Redes',
      );
      $instance = wp_parse_args( (array) $instance, $defaults );
      $title = strip_tags( $instance['title'] );
      ?>
          <p>
              <label for="<?php print $this->get_field_id( 'title' ); ?>"><?php _e( 'Title' ); ?>:</label>
              <input type="text" class="widefat" id="<?php print $this->get_field_id('title'); ?>" name="<?php print $this->get_field_name('title'); ?>" value="<?php print esc_attr( $title ); ?>"/></br>
          </p>

      <?php
  }

  function AN_Widget_Network_Anchors () {
		parent::WP_Widget(false, $name = 'Argento Neue Netword Anchors');
	}
}
add_action ('widgets_init', create_function('', 'return register_widget("AN_Widget_Network_Anchors");'));
