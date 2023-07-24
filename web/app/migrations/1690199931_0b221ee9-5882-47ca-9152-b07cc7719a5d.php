<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1690199931_0b221ee9_5882_47ca_9152_b07cc7719a5d extends AbstractMigration {

	/**
	 * Run the migration.
	 */
	public function run() {
		
            global $wpdb;
            $wpdb->query('START TRANSACTION');
            try {
                $wpdb->query("INSERT INTO wp_posts (post_author,post_date,post_date_gmt,post_content,post_title,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES ('1','2023-07-16 23:01:18','2023-07-16 23:01:18','','multiple-cans','','inherit','open','closed','','multiple-cans','','','2023-07-16 23:01:18','2023-07-16 23:01:18','',40,'http://planty.local/app/uploads/2023/07/multiple-cans.png',0,'attachment','image/png','0');");
				$lastid = $wpdb->insert_id;
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_attached_file','2023/07/multiple-cans.png');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:1438;s:6:\"height\";i:162;s:4:\"file\";s:25:\"2023/07/multiple-cans.png\";s:8:\"filesize\";i:10611;s:5:\"sizes\";a:5:{s:6:\"medium\";a:5:{s:4:\"file\";s:24:\"multiple-cans-300x34.png\";s:5:\"width\";i:300;s:6:\"height\";i:34;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:14557;}s:5:\"large\";a:5:{s:4:\"file\";s:26:\"multiple-cans-1024x115.png\";s:5:\"width\";i:1024;s:6:\"height\";i:115;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:98116;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:25:\"multiple-cans-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:20754;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:24:\"multiple-cans-768x87.png\";s:5:\"width\";i:768;s:6:\"height\";i:87;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:64994;}s:14:\"post-thumbnail\";a:5:{s:4:\"file\";s:26:\"multiple-cans-1200x135.png\";s:5:\"width\";i:1200;s:6:\"height\";i:135;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:133958;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_helper_migrations_id','0b221ee9-5882-47ca-9152-b07cc7719a5d');");

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
