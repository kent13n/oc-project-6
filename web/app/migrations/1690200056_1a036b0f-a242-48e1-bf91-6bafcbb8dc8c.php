<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1690200056_1a036b0f_a242_48e1_bf91_6bafcbb8dc8c extends AbstractMigration {

	/**
	 * Run the migration.
	 */
	public function run() {
		
            global $wpdb;
            $wpdb->query('START TRANSACTION');
            try {
                $wpdb->query("INSERT INTO wp_posts (post_author,post_date,post_date_gmt,post_content,post_title,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES ('1','2023-07-15 14:30:07','2023-07-15 14:30:07','','Logo','','inherit','open','closed','','logo','','','2023-07-15 14:30:07','2023-07-15 14:30:07','',0,'http://planty.local/app/uploads/2023/07/Logo.png',0,'attachment','image/png','0');");
				$lastid = $wpdb->insert_id;
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_attached_file','2023/07/Logo.png');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:201;s:6:\"height\";i:19;s:4:\"file\";s:16:\"2023/07/Logo.png\";s:8:\"filesize\";i:1766;s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:5:{s:4:\"file\";s:15:\"Logo-150x19.png\";s:5:\"width\";i:150;s:6:\"height\";i:19;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:1269;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_helper_migrations_id','1a036b0f-a242-48e1-bf91-6bafcbb8dc8c');");

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
