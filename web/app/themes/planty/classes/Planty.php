<?php

namespace Planty\Theme;

use Planty\Theme\JSXBlock;

class Planty
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', [$this, 'scripts']);
		add_filter('wp_nav_menu_items', [$this, 'filter_nav_menu_items'], 10, 2);
		add_action('after_setup_theme', [$this, 'after_setup_theme']);
		add_action('init', [$this, 'init']);
		add_action('admin_head', [$this, 'admin_head']);
		add_action('wp_footer', [$this, 'wp_footer']);
	}

	public function init()
	{
		(new JSXBlock\TestimonialBlock('testimonial'))->Register();
		(new JSXBlock\TastesBlock('tastes'))->Register();
		(new JSXBlock\SectionBlock('section'))->Register();
		(new JSXBlock\ProductHighlightBlock('product-highlight'))->Register();
		(new JSXBlock\TeamBlock('team'))->Register();
	}

	public function scripts()
	{
		wp_enqueue_style('twentytwenty-style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style(
			'planty-style',
			get_stylesheet_directory_uri() . '/style.css',
			['twentytwenty-style']
		);
	}

	public function filter_nav_menu_items($data, $args)
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

				$item = preg_replace('/(<a\shref="[^"]*")>(.*)<\/a><\/li>/', '\1 data-text="\2">\2</a></li>', $item);
				$html .= $item;
			}
			return $html;
		}

		return $data;
	}

	public function after_setup_theme()
	{
		add_theme_support('editor-styles');
		add_editor_style('style.css');
	}

	public function admin_head()
	{
		echo <<<HTML
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Syne:wght@300;400;500;700;800&display=swap" rel="stylesheet">
		HTML;
	}

	public function wp_footer()
	{
		wp_dequeue_style('core-block-supports');
	}
}
