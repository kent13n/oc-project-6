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
			if ($key === count($items) - 1) {
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
