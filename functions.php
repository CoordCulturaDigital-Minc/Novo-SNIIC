<?php

define('MAPAS_URL', 'http://mapas.cultura.gov.br');

/**
 * argent functions and definitions
 *
 * @package Argent
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'argent_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function argent_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on argent, use a find and replace
	 * to change 'argent' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'argent', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_editor_style( array( 'editor-style.css', argent_fonts_url() ) );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'argent-blog-thumbnail', 'auto', 'auto', true );
	add_image_size( 'argent-single-thumbnail', 660 );
	add_image_size( 'argent-project-thumbnail', 310, 250, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'argent' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'argent_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // argent_setup
add_action( 'after_setup_theme', 'argent_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function argent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'argent' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Use this widget area to display widgets in the first column of the footer.', 'argent' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'argent' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Use this widget area to display widgets in the second column of the footer.', 'argent' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'argent' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Use this widget area to display widgets in the third column of the footer.', 'argent' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'argent_widgets_init' );

/**
 * Register Google Fonts
 */
function argent_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Cabin
	 font: on or off', 'argent' ) ) {
		$fonts[] = 'Cabin:500,700,500italic,700italic';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Alegreya font: on or off', 'argent' ) ) {
		$fonts[] = 'Alegreya:400,700,400italic,700italic';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'argent' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

function img_clipper_js () {
	wp_enqueue_script( 'img-clipper', get_template_directory_uri() . '/javascript/img-clipper.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'sticky-header', get_template_directory_uri() . '/javascript/sticky-header.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'img_clipper_js' );

function argent_neue_scripts() {
	wp_enqueue_style( 'argent-style', get_stylesheet_uri() );

	wp_enqueue_style( 'argent-fonts', argent_fonts_url(), array(), null );

	wp_enqueue_script( 'argent-js', get_template_directory_uri() . '/js/argent.js', array( 'jquery' ), '20150326', true );

	wp_enqueue_script( 'argent-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'argent-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( 'jetpack-portfolio' == get_post_type() && argent_get_gallery() ) {
		wp_enqueue_style( 'argent-slick-css', get_template_directory_uri() . '/js/slick/slick.css' );
		wp_enqueue_script( 'argent-slick-js', get_template_directory_uri() . '/js/slick/slick.js', array( 'jquery' ), '1.4.1', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'argent_neue_scripts' );

function argent_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'argent_excerpt_length', 999 );

/**
 * Add 'Read more' link to excerpts
 */
function argent_excerpt_more( $excerpt ) {
	return '&hellip; <a class="read-more" href="'. esc_url( get_permalink() ) . '">' . sprintf( wp_kses_post( __( 'Read more <span class="sr-only">%1$s</span>', 'argent' ) ), esc_attr( strip_tags( get_the_title() ) ) ) . '</a>';
}
add_filter( 'excerpt_more', 'argent_excerpt_more' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//SNIIC ====================================
require get_template_directory() . '/inc/post_type_publicacoes.php';
require get_template_directory() . '/inc/sniic_save_search.php';

// Just run 'bower update' on terminal

function argent_neue_dependencies () {

	$bower_directory = get_template_directory_uri() . '/bower_components';

	// NECOLAS NORMALIZE.CSS
	wp_enqueue_style( 'normalize.css', $bower_directory . '/normalize.css/normalize.css' );

	// FONT-AWESOME
	wp_enqueue_style( 'font-awesome', $bower_directory . '/font-awesome/css/font-awesome.min.css' );

	// LATO@GOOGLE-FONTS
	wp_enqueue_style( 'lato-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' );

	// TWITTER BOOTSTRAP
	wp_enqueue_style( 'twitter_bootstrap', $bower_directory . '/bootstrap/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'twitter_bootstrap_theme', $bower_directory . '/bootstrap/dist/css/bootstrap-theme.min.css' );
	wp_enqueue_script( 'twitter_bootstrap', $bower_directory . '/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), false, true );

	// D3
	wp_enqueue_script( 'd3', $bower_directory . '/d3/d3.min.js', array(), false, false );

}
add_action( 'wp_enqueue_scripts', 'argent_neue_dependencies' );

// remove admin bar
remove_action('wp_footer','wp_admin_bar_render',1000);
function remove_admin_bar(){
   return false;
}
add_filter( 'show_admin_bar' , 'remove_admin_bar');

function exclude_excerpt_more_link( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'exclude_excerpt_more_link' );

function exclude_post_thumbnail_link( $html, $post_id, $post_image_id ) {
	return $html;
}
add_filter( 'post_thumbnail_html', 'exclude_post_thumbnail_link', 10, 3 );

function sniic_change_sender($email){
	return "sniic@cultura.gov.br";
}
add_filter("wp_mail_from", "sniic_change_sender");

require ('shortcodes.php');
