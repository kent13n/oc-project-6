<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1690200037_8682cb43_47db_47f7_b05d_98885c1384f0 extends AbstractMigration {

	/**
	 * Run the migration.
	 */
	public function run() {
		
            global $wpdb;
            $wpdb->query('START TRANSACTION');
            try {
                $wpdb->query("UPDATE wp_posts SET post_author='1',post_date='2023-07-16 17:57:31',post_date_gmt='2023-07-16 17:57:31',post_content='',post_title='Group-3',post_excerpt='',post_status='inherit',comment_status='open',ping_status='closed',post_password='',post_name='group-3',to_ping='',pinged='',post_modified='2023-07-16 17:57:31',post_modified_gmt='2023-07-16 17:57:31',post_content_filtered='',post_parent=40,guid='http://planty.local/app/uploads/2023/07/Group-3.png',menu_order=0,post_type='attachment',post_mime_type='image/png',comment_count='0' WHERE ID = (SELECT post_id FROM wp_postmeta WHERE meta_key = '_wp_helper_migrations_id' and meta_value = '8682cb43-47db-47f7-b05d-98885c1384f0');");
				$wpdb->query("DELETE FROM wp_postmeta WHERE post_id = (SELECT post_id FROM (SELECT post_id, meta_key, meta_value FROM wp_postmeta) as m WHERE m.meta_key = '_wp_helper_migrations_id' and m.meta_value = '8682cb43-47db-47f7-b05d-98885c1384f0') and meta_key != '_wp_helper_migrations_id' and meta_key != '_edit_lock' and meta_key != '_edit_last';");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ((SELECT post_id FROM (SELECT post_id, meta_key, meta_value FROM wp_postmeta) as m WHERE m.meta_key = '_wp_helper_migrations_id' and m.meta_value = '8682cb43-47db-47f7-b05d-98885c1384f0'),'_wp_attached_file','2023/07/Group-3.png');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ((SELECT post_id FROM (SELECT post_id, meta_key, meta_value FROM wp_postmeta) as m WHERE m.meta_key = '_wp_helper_migrations_id' and m.meta_value = '8682cb43-47db-47f7-b05d-98885c1384f0'),'_wp_attachment_metadata','a:6:{s:5:\"width\";i:350;s:6:\"height\";i:401;s:4:\"file\";s:19:\"2023/07/Group-3.png\";s:8:\"filesize\";i:16108;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:19:\"Group-3-262x300.png\";s:5:\"width\";i:262;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:18613;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:19:\"Group-3-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:8189;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}');");

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
