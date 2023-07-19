<?php

/**
 * Planty Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package planty
 */

use Planty\Theme;

require_once(get_stylesheet_directory() . '/inc/autoloader.php');

new Theme\Planty();
