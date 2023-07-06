<?php

/**
 * Based on an idea and code by webdev studios: https://webdevstudios.com/2015/11/03/loading-the-optimal-wordpress-object-cache-implementation-in-your-production-staging-and-local-development-environments/
 */


$plugin_dir = (defined('WP_PLUGIN_DIR') ? WP_PLUGIN_DIR : WP_CONTENT_DIR . '/plugins');

// Then load our object cache plugin (if available).
if (file_exists($plugin_dir . '/memcached/object-cache.php')) {
	require_once $plugin_dir . '/memcached/object-cache.php';
}

/**
 * If we can't use the object-cache, we need some trickery
 * for WP to believe we aren't actually using an object-cache
 * (which it assumes since we have this file)
 */
else {

	// Helper/callback.
	function set_wp_using_ext_object_cache_to_false()
	{
		wp_using_ext_object_cache(false);
	}

	// Set to false now.
	// (After this file loads, WP resets to true.)
	set_wp_using_ext_object_cache_to_false();

	// Include the built-in WP object-caching.
	require_once(ABSPATH . WPINC . '/cache.php');

	// Hook in to reset to false,
	add_action(
		'muplugins_loaded', // To the earliest hook,
		'set_wp_using_ext_object_cache_to_false',
		-9999 // At a super early priority.
	);
}
