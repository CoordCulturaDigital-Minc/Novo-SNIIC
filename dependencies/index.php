<?php

// Just run 'bower update' on terminal

function argent_neue_dependencies () {

	$bower_directory = get_template_directory_uri() . '/dependencies';

	// NECOLAS NORMALIZE.CSS
	wp_enqueue_style( 'normalize.css', $bower_directory . '/normalize.css/normalize.css' );

	// FONT-AWESOME
	wp_enqueue_style( 'font-awesome', $bower_directory . '/font-awesome/css/font-awesome.min.css' );

	// TWITTER BOOTSTRAP
	wp_enqueue_style( 'twitter_bootstrap', $bower_directory . '/bootstrap/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'twitter_bootstrap_theme', $bower_directory . '/bootstrap/dist/css/bootstrap-theme.min.css' );
	wp_enqueue_script( 'twitter_bootstrap', $bower_directory . '/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), false, true );

}
add_action( 'wp_enqueue_scripts', 'argent_neue_dependencies' );
