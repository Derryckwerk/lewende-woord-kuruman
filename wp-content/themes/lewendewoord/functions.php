<?php
/**
 * Lewende Woord theme setup.
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LW_VERSION', '1.0.0' );

require_once get_template_directory() . '/inc/slideshow.php';

/**
 * Theme supports.
 */
function lw_setup() {
	load_theme_textdomain( 'lewendewoord', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Hoofmenu', 'lewendewoord' ),
		)
	);
}
add_action( 'after_setup_theme', 'lw_setup' );

/**
 * Styles and scripts.
 */
function lw_assets() {
	wp_enqueue_style(
		'lw-fonts',
		'https://fonts.googleapis.com/css2?family=Courgette&family=Dancing+Script:wght@500&family=Yellowtail&family=Poppins:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'lw-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'lw-fonts' ),
		LW_VERSION
	);

	// Inner-page styles (shared page styles + per-page extras).
	if ( is_page( array( 'wie-is-ons', 'die-span', 'lidmaatskap', 'bydrae', 'kontak-ons', 'komende-gebeure', 'bedieninge' ) ) ) {
		wp_enqueue_style(
			'lw-wie-is-ons',
			get_template_directory_uri() . '/assets/css/wie-is-ons.css',
			array( 'lw-main' ),
			LW_VERSION
		);
	}
	if ( is_page( 'die-span' ) ) {
		wp_enqueue_style(
			'lw-die-span',
			get_template_directory_uri() . '/assets/css/die-span.css',
			array( 'lw-wie-is-ons' ),
			LW_VERSION
		);
	}

	if ( is_page( 'bedieninge' ) ) {
		wp_enqueue_style(
			'lw-bedieninge',
			get_template_directory_uri() . '/assets/css/bedieninge.css',
			array( 'lw-wie-is-ons' ),
			LW_VERSION
		);
	}

	if ( is_page( 'komende-gebeure' ) ) {
		wp_enqueue_style(
			'lw-gebeure',
			get_template_directory_uri() . '/assets/css/gebeure.css',
			array( 'lw-wie-is-ons' ),
			LW_VERSION
		);
	}

	if ( is_page( 'kontak-ons' ) ) {
		// Reuses the form field styles from lidmaatskap.css.
		wp_enqueue_style(
			'lw-lidmaatskap',
			get_template_directory_uri() . '/assets/css/lidmaatskap.css',
			array( 'lw-wie-is-ons' ),
			LW_VERSION
		);
		wp_enqueue_style(
			'lw-kontak',
			get_template_directory_uri() . '/assets/css/kontak.css',
			array( 'lw-lidmaatskap' ),
			LW_VERSION
		);
		wp_enqueue_script(
			'lw-kontak',
			get_template_directory_uri() . '/assets/js/kontak.js',
			array(),
			LW_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}

	if ( is_page( 'bydrae' ) ) {
		wp_enqueue_style(
			'lw-bydrae',
			get_template_directory_uri() . '/assets/css/bydrae.css',
			array( 'lw-wie-is-ons' ),
			LW_VERSION
		);
		wp_enqueue_script(
			'lw-bydrae',
			get_template_directory_uri() . '/assets/js/bydrae.js',
			array(),
			LW_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}

	if ( is_page( 'lidmaatskap' ) ) {
		wp_enqueue_style(
			'lw-lidmaatskap',
			get_template_directory_uri() . '/assets/css/lidmaatskap.css',
			array( 'lw-wie-is-ons' ),
			LW_VERSION
		);
		wp_enqueue_script(
			'lw-lidmaatskap',
			get_template_directory_uri() . '/assets/js/lidmaatskap.js',
			array(),
			LW_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}

	wp_enqueue_script(
		'lw-nav',
		get_template_directory_uri() . '/assets/js/nav.js',
		array(),
		LW_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	if ( is_front_page() || is_page( 'lidmaatskap' ) ) {
		wp_enqueue_script(
			'lw-slideshow',
			get_template_directory_uri() . '/assets/js/slideshow.js',
			array(),
			LW_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'lw_assets' );

/**
 * Phone-only refinements. The "media" argument means browsers ignore this file on wider screens.
 * Priority 99 makes it load after every page stylesheet so it can refine them.
 */
function lw_phone_assets() {
	wp_enqueue_style(
		'lw-phone',
		get_template_directory_uri() . '/assets/css/phone.css',
		array(),
		LW_VERSION,
		'(max-width: 700px)'
	);
}
add_action( 'wp_enqueue_scripts', 'lw_phone_assets', 99 );

/**
 * Helper: URL of a file inside assets/images (subfolders allowed, e.g. 'home/file.png').
 */
function lw_image( $file ) {
	return esc_url( get_template_directory_uri() . '/assets/images/' . implode( '/', array_map( 'rawurlencode', explode( '/', $file ) ) ) );
}
