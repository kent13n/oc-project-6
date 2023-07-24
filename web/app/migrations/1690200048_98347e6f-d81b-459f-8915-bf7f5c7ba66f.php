<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1690200048_98347e6f_d81b_459f_8915_bf7f5c7ba66f extends AbstractMigration {

	/**
	 * Run the migration.
	 */
	public function run() {
		
            global $wpdb;
            $wpdb->query('START TRANSACTION');
            try {
                $wpdb->query("UPDATE wp_posts SET post_author='1',post_date='2023-07-16 17:52:56',post_date_gmt='2023-07-16 17:52:56',post_content='',post_title='Planty6-1-2',post_excerpt='',post_status='inherit',comment_status='open',ping_status='closed',post_password='',post_name='planty6-1-2',to_ping='',pinged='',post_modified='2023-07-16 17:52:56',post_modified_gmt='2023-07-16 17:52:56',post_content_filtered='',post_parent=40,guid='http://planty.local/app/uploads/2023/07/Planty6-1-2.png',menu_order=0,post_type='attachment',post_mime_type='image/png',comment_count='0' WHERE ID = (SELECT post_id FROM wp_postmeta WHERE meta_key = '_wp_helper_migrations_id' and meta_value = '98347e6f-d81b-459f-8915-bf7f5c7ba66f');");
				$wpdb->query("DELETE FROM wp_postmeta WHERE post_id = (SELECT post_id FROM (SELECT post_id, meta_key, meta_value FROM wp_postmeta) as m WHERE m.meta_key = '_wp_helper_migrations_id' and m.meta_value = '98347e6f-d81b-459f-8915-bf7f5c7ba66f') and meta_key != '_wp_helper_migrations_id' and meta_key != '_edit_lock' and meta_key != '_edit_last';");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ((SELECT post_id FROM (SELECT post_id, meta_key, meta_value FROM wp_postmeta) as m WHERE m.meta_key = '_wp_helper_migrations_id' and m.meta_value = '98347e6f-d81b-459f-8915-bf7f5c7ba66f'),'_wp_attached_file','2023/07/Planty6-1-2.png');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ((SELECT post_id FROM (SELECT post_id, meta_key, meta_value FROM wp_postmeta) as m WHERE m.meta_key = '_wp_helper_migrations_id' and m.meta_value = '98347e6f-d81b-459f-8915-bf7f5c7ba66f'),'_wp_attachment_metadata','a:6:{s:5:\"width\";i:387;s:6:\"height\";i:618;s:4:\"file\";s:23:\"2023/07/Planty6-1-2.png\";s:8:\"filesize\";i:135418;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:23:\"Planty6-1-2-188x300.png\";s:5:\"width\";i:188;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:32270;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:23:\"Planty6-1-2-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:14799;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}');");

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
