<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1690199998_aca138a1_60e7_40bb_8911_380e6f647d46 extends AbstractMigration {

	/**
	 * Run the migration.
	 */
	public function run() {
		
            global $wpdb;
            $wpdb->query('START TRANSACTION');
            try {
                $wpdb->query("INSERT INTO wp_posts (post_author,post_date,post_date_gmt,post_content,post_title,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES ('1','2023-07-16 21:04:01','2023-07-16 21:04:01','','rodion-kutsaev-4k8xEFW4_3Q-unsplash-1','','inherit','open','closed','','rodion-kutsaev-4k8xefw4_3q-unsplash-1','','','2023-07-16 21:04:01','2023-07-16 21:04:01','',40,'http://planty.local/app/uploads/2023/07/rodion-kutsaev-4k8xEFW4_3Q-unsplash-1.jpg',0,'attachment','image/jpeg','0');");
				$lastid = $wpdb->insert_id;
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_attached_file','2023/07/rodion-kutsaev-4k8xEFW4_3Q-unsplash-1.jpg');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:393;s:6:\"height\";i:262;s:4:\"file\";s:49:\"2023/07/rodion-kutsaev-4k8xEFW4_3Q-unsplash-1.jpg\";s:8:\"filesize\";i:114499;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:49:\"rodion-kutsaev-4k8xEFW4_3Q-unsplash-1-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:10707;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:49:\"rodion-kutsaev-4k8xEFW4_3Q-unsplash-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:5240;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_helper_migrations_id','aca138a1-60e7-40bb-8911-380e6f647d46');");

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
