<?php
/**
 * CandyLight functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage CandyLight
 * @since CandyLight 1.0
 */

if ( ! function_exists( 'candylight_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since CandyLight 1.0
	 *
	 * @return void
	 */
	function candylight_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'candylight_support' );

if ( ! function_exists( 'candylight_styles' ) ) :

	/**
	 * Enqueues styles.
	 *
	 * @since CandyLight 1.0
	 *
	 * @return void
	 */
	function candylight_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'candylight-style',
			get_parent_theme_file_uri( $src ),
			array(),
			$version_string
		);
		wp_style_add_data(
			'candylight-style',
			'path',
			get_parent_theme_file_path( $src )
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'candylight_styles' );

// Add block patterns.
require get_template_directory() . '/inc/block-patterns.php';
