<?php

/**
 * Planty Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package planty
 */

add_action('wp_enqueue_scripts', 'twentytwenty_parent_theme_enqueue_styles');

/**
 * Enqueue scripts and styles.
 */
function twentytwenty_parent_theme_enqueue_styles()
{
	wp_enqueue_style('twentytwenty-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style(
		'planty-style',
		get_stylesheet_directory_uri() . '/style.css',
		['twentytwenty-style']
	);
}


function filter_nav_menu_items($data, $args)
{
	if ($args->theme_location === 'primary') {
		$html = '';
		$admin_url = admin_url();
		$admin_link = "<li class=\"menu-item\"><a href=\"{$admin_url}\" data-text=\"Admin\">Admin</a></li>";
		$items = preg_split("/\n/", $data, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($items as $key => $item) {
			if (is_user_logged_in() && $key === count($items) - 1) {
				$html .= $admin_link;
			}

			// dd($item);
			$item = preg_replace('/(<a\shref="[^"]*")>(.*)<\/a><\/li>/', '\1 data-text="\2">\2</a></li>', $item);
			$html .= $item;
		}
		return $html;
	}

	return $data;
}

add_filter('wp_nav_menu_items', 'filter_nav_menu_items', 10, 2);

function planty_after_setup_theme()
{
	add_theme_support('editor-styles');
	add_editor_style('style.css');
}
add_action('after_setup_theme', 'planty_after_setup_theme');


function register_custom_blocks()
{
	if (!function_exists('register_block_type')) {
		return;
	}

	$dir = get_stylesheet_directory() . '/blocks';

	// register testimonial custom block
	wp_register_script(
		'testimonial',
		get_stylesheet_directory_uri() . '/blocks/dist/testimonial.js',
		['wp-blocks', 'wp-editor', 'wp-i18n', 'wp-element', 'wp-components'],
		filemtime("{$dir}/dist/testimonial.js")
	);

	wp_register_style(
		'testimonial-editor',
		get_stylesheet_directory_uri() . '/blocks/testimonial/editor.css',
		[],
		filemtime("{$dir}/testimonial/editor.css")
	);

	wp_register_style(
		'testimonial',
		get_stylesheet_directory_uri() . "/blocks/testimonial/style.css",
		[],
		filemtime("{$dir}/testimonial/style.css")
	);

	register_block_type('planty/testimonial', array(
		'editor_script' => 'testimonial',
		'editor_style' => 'testimonial-editor',
		'style' => 'testimonial',
		'attributes' => [
			'nb' => ['type' => 'number', 'default' => 3],
			'testimonials' => ['type' => 'array', 'default' => []]
		],
		'render_callback' => 'testimonial_render'
	));

	// register tastes custom block
	wp_register_script(
		'tastes',
		get_stylesheet_directory_uri() . '/blocks/dist/tastes.js',
		['wp-blocks', 'wp-editor', 'wp-i18n', 'wp-element', 'wp-components'],
		filemtime("{$dir}/dist/tastes.js")
	);

	wp_register_style(
		'tastes-editor',
		get_stylesheet_directory_uri() . '/blocks/tastes/editor.css',
		[],
		filemtime("{$dir}/tastes/editor.css")
	);

	wp_register_style(
		'tastes',
		get_stylesheet_directory_uri() . "/blocks/tastes/style.css",
		[],
		filemtime("{$dir}/tastes/style.css")
	);

	register_block_type('planty/tastes', array(
		'editor_script' => 'tastes',
		'editor_style' => 'tastes-editor',
		'style' => 'tastes',
		'attributes' => [
			'nb' => ['type' => 'number', 'default' => 4],
			'tastes' => ['type' => 'array', 'default' => []]
		],
		'render_callback' => 'tastes_render'
	));
}

add_action('init', 'register_custom_blocks');

function testimonial_render(array $attributes)
{
	$html = '<div class="wp-block-planty-testimonial">';
	$testimonials = array_slice($attributes['testimonials'], 0, $attributes['nb']);
	foreach ($testimonials as $testimonial) {
		$imageSrc = isset($testimonial['imageSrc']) ? $testimonial['imageSrc'] : '';
		$title = isset($testimonial['title']) ? $testimonial['title'] : '';
		$content = isset($testimonial['content']) ? $testimonial['content'] : '';

		$html .= <<<HTML
			<div class="testimonial">
				<img src="{$imageSrc}">
				<div class="testimonial-content">
					<h2>{$title}</h2>
					<p>{$content}</p>
				</div>
			</div>
		HTML;
	}

	return $html . '</div>';
}

function tastes_render(array $attributes)
{
	$html = '<div class="wp-block-planty-tastes">';
	$tastes = array_slice($attributes['tastes'], 0, $attributes['nb']);

	foreach ($tastes as $taste) {
		$imageSrc = isset($taste['imageSrc']) ? $taste['imageSrc'] : '';
		$title = isset($taste['title']) ? $taste['title'] : '';

		$html .= <<<HTML
			<div class="taste">
				<img src="{$imageSrc}">
				<h3>{$title}</h3>
			</div>
		HTML;
	}

	return $html . '</div>';
}

function add_custom_font()
{
	echo <<<HTML
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Syne:wght@300;400;500;700;800&display=swap" rel="stylesheet">
	HTML;
}
add_action('admin_head', 'add_custom_font');
