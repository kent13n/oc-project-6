<?php
/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package planty
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function testimonial_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = get_stylesheet_directory() . '/blocks';

	$index_js = 'testimonial/index.js';
	wp_register_script(
		'testimonial-block-editor',
		get_stylesheet_directory_uri() . "/blocks/{$index_js}",
		[
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		],
		filemtime( "{$dir}/{$index_js}" )
	);

	$editor_css = 'testimonial/editor.css';
	wp_register_style(
		'testimonial-block-editor',
		get_stylesheet_directory_uri() . "/blocks/{$editor_css}",
		[],
		filemtime( "{$dir}/{$editor_css}" )
	);

	$style_css = 'testimonial/style.css';
	wp_register_style(
		'testimonial-block',
		get_stylesheet_directory_uri() . "/blocks/{$style_css}",
		[],
		filemtime( "{$dir}/{$style_css}" )
	);

	register_block_type( 'planty/testimonial', [
		'editor_script' => 'testimonial-block-editor',
		'editor_style'  => 'testimonial-block-editor',
		'style'         => 'testimonial-block',
	] );
}

add_action( 'init', 'testimonial_block_init' );
