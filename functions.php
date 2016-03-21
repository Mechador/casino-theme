<?php
/**
 * casino functions and definitions
 *
 * @package casino
 */

if ( ! function_exists( 'casino_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function casino_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on casino, use a find and replace
	 * to change 'casino' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'casino', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
        
        if ( function_exists( 'add_image_size' ) ) {
            add_image_size( 'minithumb', 280, 120, true ); //(cropped)
	}

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'header-mmenu' ),
                'secondary' => esc_html__( 'Footer Menu', 'footer-menu' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'casino_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // casino_setup
add_action( 'after_setup_theme', 'casino_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function casino_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'casino_content_width', 1180 );
}
add_action( 'after_setup_theme', 'casino_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function casino_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'casino' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'casino_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function casino_scripts() {
	wp_enqueue_style( 'casino-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'casino-custom', get_template_directory_uri() . '/css/bootstrap.min.css' );
        
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/bower_components/font-awesome/css/font-awesome.min.css' );

	wp_enqueue_script( 'casino-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
        
        wp_enqueue_script( 'casino-jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', true );
        
        wp_enqueue_script( 'casino-bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', true );
        
        wp_enqueue_script( 'mixitup-js', get_template_directory_uri() . '/js/jquery.mixitup.js', true );
        
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '20130115', true );
        

        
        

	wp_enqueue_script( 'casino-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'casino_scripts' );

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


//remove_filter( 'the_content', 'wpautop' );

function new_excerpt_length($length) {
	return 27;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function casino_widget_func  () {
	 return ' 
     <div class="col-sm-8 cas_widget_body">

        <div class="text-center casino-block casino-horiz-widget ">

                <div class="casino-block-left "> 

                        <img src=" '.  get_template_directory_uri() .'/images/casinomini.png" alt="Free Spins" class="pull-left">

                        <div class="casino-horiz-widget-text pull-right">
                        <h3 class="casino-block-title">Free Spins Casino</h3>
                        <p class="casino-block-content block-content">Free Spins Casino is an online casino that promis...</p>
                        </div>

                </div>


                <div class="casino-block-right clearfix">
                        <span class="pull-left">Featured Casino</span>

                        <span class="rating pull-right">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-empty"></span>
                        </span>



                        <div class="btn-group">
                                <a href="/" class="btn btn-reviews">Reviews</a>
                                <a href="/" class="btn btn-playnow">Play now</a>
                        </div>

                </div>

        </div>

    </div>
';
}
add_shortcode('casino_widget', 'casino_widget_func');

//Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');



