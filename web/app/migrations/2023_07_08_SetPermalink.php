<?php

use WpHelperMigrations\AbstractMigration;

class Migration_2023_07_08_SetPermalink extends AbstractMigration
{

	/**
	 * Run the migration.
	 */
	public function Run()
	{
		$sql = "
			UPDATE wp_options SET option_value = '/%postname%/' WHERE option_name = 'permalink_structure';
		";

		dbDelta($sql);
	}

	/**
	 * Optional: Roll back the migration.
	 */
	public function Rollback()
	{
		$sql = "
			UPDATE wp_options SET option_value = '' WHERE option_name = 'permalink_structure';
		";

		dbDelta($sql);
	}
}
