<?php

/**
 * Plugin Name: WP Helper Migrations
 * Plugin URI:
 * Description: WP Helper Migrations allows you to effortlessly create migrations for existings content.
 * Author: Quentin Jallet
 * Author URI:
 * Version: 1.0.0
 * Text Domain: wp-helper-migrations
 *
 * @package WpHelperMigrations
 */

defined('ABSPATH') || exit;

// require_once(plugin_dir_path(__FILE__) . 'vendor/autoload.php');

new \WpHelperMigrations\Main(__FILE__);
// $plugin = new WpHelperMigrations\Main(__FILE__);
