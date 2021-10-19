<?php
/**
 * Kroeger Marine Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kroeger Marine
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_KROEGER_MARINE_VERSION', '1.0.1' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'kroeger-marine-theme-css', get_stylesheet_directory_uri() . '/css/main.min.css', array('astra-theme-css'), NULL, 'all' );
	wp_enqueue_style( 'fix-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_KROEGER_MARINE_VERSION, 'all' );
	wp_enqueue_script('local-only', get_stylesheet_directory_uri() . '/local-only-scripts.js');

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Enqueue Scripts
 */

 function jquery_js() {
		 wp_enqueue_script( 'jquery_js', get_stylesheet_directory_uri() . '/js/jquery-3.4.1.min.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'jquery_js');

 function bootstrap_js() {
		wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'bootstrap_js');


 function owl_js() {
     wp_enqueue_script( 'owl_js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'owl_js');

 function rellax_js() {
		 wp_enqueue_script( 'rellax_js', get_stylesheet_directory_uri() . '/js/rellax.min.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'rellax_js');

 function bgvideo_js() {
		wp_enqueue_script( 'bgvideo_js', get_stylesheet_directory_uri() . '/js/jquery.background-video.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'bgvideo_js');

 function tooltip_js() {
	 wp_enqueue_script( 'tooltip_js', get_stylesheet_directory_uri() . '/js/tooltipster.bundle.min.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'tooltip_js');


 function wow_js() {
	wp_enqueue_script( 'wow_js', get_stylesheet_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'wow_js');

 function parallax_js() {
 wp_enqueue_script( 'parallax_js', get_stylesheet_directory_uri() . '/js/paralmax-min.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'parallax_js');

 // function instafeed_js() {
 // wp_enqueue_script( 'instafeed_js', get_stylesheet_directory_uri() . '/js/instafeed.js', array( 'jquery' ), '1.0', true );
 // }

 // add_action('wp_enqueue_scripts', 'instafeed_js');

 function imagesloaded_js() {
 wp_enqueue_script( 'imagesloaded_js', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array( 'jquery' ), '1.0', true );
 }

 function custom_js() {
     wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/js/custom_scripts.js', array( 'jquery' ), '1.0', true );
 }

 add_action('wp_enqueue_scripts', 'custom_js');

 add_action('wp_enqueue_scripts', 'imagesloaded_js');



add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'menu', __( 'Left Menu', 'left-menu' ) );
}

add_action( 'after_setup_theme', 'register_right_menu' );
function register_right_menu() {
  register_nav_menu( 'menu', __( 'Right Menu', 'right-menu' ) );
}


// Theme assert_options

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
