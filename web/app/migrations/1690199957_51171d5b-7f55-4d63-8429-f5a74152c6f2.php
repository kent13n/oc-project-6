<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1690199957_51171d5b_7f55_4d63_8429_f5a74152c6f2 extends AbstractMigration {

	/**
	 * Run the migration.
	 */
	public function run() {
		
            global $wpdb;
            $wpdb->query('START TRANSACTION');
            try {
                $wpdb->query("INSERT INTO wp_posts (post_author,post_date,post_date_gmt,post_content,post_title,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES ('1','2023-07-16 22:52:55','2023-07-16 22:52:55','','Marc-min','','inherit','open','closed','','marc-min','','','2023-07-16 22:52:55','2023-07-16 22:52:55','',40,'http://planty.local/app/uploads/2023/07/Marc-min.png',0,'attachment','image/png','0');");
				$lastid = $wpdb->insert_id;
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_attached_file','2023/07/Marc-min.png');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:1122;s:6:\"height\";i:1235;s:4:\"file\";s:20:\"2023/07/Marc-min.png\";s:8:\"filesize\";i:468558;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:20:\"Marc-min-273x300.png\";s:5:\"width\";i:273;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:118605;}s:5:\"large\";a:5:{s:4:\"file\";s:21:\"Marc-min-930x1024.png\";s:5:\"width\";i:930;s:6:\"height\";i:1024;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:1127838;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:20:\"Marc-min-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:36334;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:20:\"Marc-min-768x845.png\";s:5:\"width\";i:768;s:6:\"height\";i:845;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:793215;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_helper_migrations_id','51171d5b-7f55-4d63-8429-f5a74152c6f2');");

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
