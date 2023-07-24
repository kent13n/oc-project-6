<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1690200062_SetFrontpage extends AbstractMigration
{

	/**
	 * Run the migration.
	 */
	public function Run()
	{
		global $wpdb;
		$wpdb->query('START TRANSACTION');
		try {
			$resultat = $wpdb->get_results("SELECT ID from {$wpdb->prefix}posts WHERE post_title='Accueil' AND post_type='page' ORDER BY ID desc LIMIT 1");
			$id = is_array($resultat) && count($resultat) > 0 ? $resultat[0]->ID : null;
			$wpdb->query("UPDATE {$wpdb->prefix}options SET option_value = '{$id}' WHERE option_name = 'page_on_front'");
			$wpdb->query("UPDATE {$wpdb->prefix}options SET option_value = 'page' WHERE option_name = 'show_on_front'");
			$wpdb->query('COMMIT');
		} catch (\Throwable $e) {
			$wpdb->query('ROLLBACK');
		}
	}

	/**
	 * Optional: Roll back the migration.
	 */
	public function Rollback()
	{
	}
}
