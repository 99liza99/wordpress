<?php
/**
 * Blank slate functions and definitions
*/

if ( ! function_exists( 'blankslate_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * @return void
	 */
	function blankslate_support() {
		add_theme_support( 'wp-block-styles' );
		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'blankslate_support' );
if ( ! function_exists( 'blankslate_styles' ) ) :
	/**
	 * Enqueue styles.
	 * @return void
	 */
	function blankslate_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'blankslate-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		wp_enqueue_style( 'blankslate-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'blankslate_styles' );

//Include ACF Block
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/testimonial' );
    register_block_type( __DIR__ . '/blocks/contacts' );
    register_block_type( __DIR__ . '/blocks/faqs' );
}