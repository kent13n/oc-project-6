<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1689423258_c70cbffe_ca4e_4735_814b_57d200eb5449 extends AbstractMigration {

	/**
	 * Run the migration.
	 */
	public function run() {
		
            global $wpdb;
            $wpdb->query('START TRANSACTION');
            try {
                $wpdb->query("INSERT INTO wp_posts (post_author,post_date,post_date_gmt,post_content,post_title,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES ('1','2023-07-15 12:08:07','2023-07-15 12:08:07','','Mentions légales','','publish','closed','closed','','mentions-legales','','','2023-07-15 12:08:08','2023-07-15 12:08:08','',0,'https://planty.local/?page_id=32',0,'page','','0');");
				$lastid = $wpdb->insert_id;
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_helper_migrations_id','c70cbffe-ca4e-4735-814b-57d200eb5449');");

                $wpdb->query('COMMIT');
            } catch (\Throwable $e) {
                $wpdb->query('ROLLBACK');
            }
        
	}

	/**
	 * Optional: Roll back the migration.
	 */
	public function rollback() {
		
	}

}
