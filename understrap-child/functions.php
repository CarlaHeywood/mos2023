<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	$version = wp_get_theme()->get('Version');

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js", array(),  '3.6.3');
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );

	// wp_enqueue_script( 'rs-rev', "https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.revolution.min.js", array() , '5.4.201-8.6');
	// wp_enqueue_script( 'rs-tools', "https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js", array() , '5.4.201-8.6');


	// CSS
	wp_enqueue_style( 'all-css', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css", array() , '1.0');
	wp_enqueue_style( 'bootstrap-m in', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css", array() , '5.3.0');
	wp_enqueue_style( 'fancy-box', "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css", array() , '3.5.7');
	wp_enqueue_style( 'owl-carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array() , '2.3.4');
	wp_enqueue_style( 'rs-plugin', plugins_url() . "/rs-plugin/css/settings.css", array() , '1.4.5');
	wp_enqueue_style( 'rs-style', plugins_url() . "/rs-plugin/css/style.css", array() , '1.0');

	// JavaScript
	wp_enqueue_script( 'all-css', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js", array() , '6.3.0', true);
	wp_enqueue_script( 'bootstrap-m in', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", array() , '5.3.0', true);
	wp_enqueue_script( 'fancy-box', "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js", array() , '3.5.7', true);
	wp_enqueue_script( 'owl-carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array() , '2.3.4', true);

	wp_enqueue_style( 'rs-rev', plugins_url() . "/rs-plugin/js/jquery.themepunch.revolution.min.js", array() , '1.4.5', true);
	wp_enqueue_style( 'rs-tools', plugins_url() . "/rs-plugin/js/jquery.themepunch.tools.min.js", array() , '1.4.5', true);
	
	// wp_enqueue_script( 'rs-rev', "https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.revolution.min.js", array() , '5.4.8', true);
	// wp_enqueue_script( 'rs-tools', "https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js", array() , '2.1.3', true);

	// wp_enqueue_script( 'script', get_template_directory_uri() . "/js/script.js", array('all-css','bootstrap-m in','fancy-box','owl-carousel','rs-rev','rs-tools') , $version, true);
	wp_enqueue_script( 'rs-script', plugins_url() . "/rs-plugin/js/script.js", array() , '1.0', true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @return string
 */
function understrap_default_bootstrap_version() {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );
