<?php

use WpHelperMigrations\AbstractMigration;

class Migration_1689423263_be1e619e_fa6e_4363_a1db_c51f7a5bc839 extends AbstractMigration {

	/**
	 * Run the migration.
	 */
	public function run() {
		
            global $wpdb;
            $wpdb->query('START TRANSACTION');
            try {
                $wpdb->query("INSERT INTO wp_posts (post_author,post_date,post_date_gmt,post_content,post_title,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES ('1','2023-07-15 12:01:39','2023-07-15 12:01:39','<!-- wp:cover {\"overlayColor\":\"nv-site-bg\",\"minHeight\":300,\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull\" style=\"min-height:300px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-site-bg-background-color has-background-dim-100 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":1,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-left\"} -->\n<h1 class=\"wp-block-heading has-text-align-left has-neve-text-color-color has-text-color\">Nous rencontrer</h1>\n<!-- /wp:heading --></div>\n<!-- /wp:group --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:cover {\"overlayColor\":\"nv-light-bg\",\"minHeight\":600,\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-light-bg-background-color has-background-dim-100 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:spacer {\"height\":\"80px\"} -->\n<div style=\"height:80px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:columns {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50{ebb17252add153fc365f7f06ab560ea31fac5a6752d14bde74b7c6c7fac7cf68}\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50{ebb17252add153fc365f7f06ab560ea31fac5a6752d14bde74b7c6c7fac7cf68}\"><!-- wp:image {\"className\":\"size-large\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"https://planty.local/app/themes/neve/assets/img/starter-content/card-06.jpg\" alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50{ebb17252add153fc365f7f06ab560ea31fac5a6752d14bde74b7c6c7fac7cf68}\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50{ebb17252add153fc365f7f06ab560ea31fac5a6752d14bde74b7c6c7fac7cf68}\"><!-- wp:heading {\"textColor\":\"neve-text-color\"} -->\n<h2 class=\"wp-block-heading has-neve-text-color-color has-text-color\">Our Story</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"textColor\":\"neve-text-color\",\"fontSize\":\"medium\"} -->\n<p class=\"has-neve-text-color-color has-text-color has-medium-font-size\">Are there any leftovers in the kitchen? what are the expectations but technologically savvy.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"textColor\":\"neve-text-color\"} -->\n<p class=\"has-neve-text-color-color has-text-color\">Quick sync new economy onward and upward, productize the deliverables and focus on the bottom line high touch client we need to have a Come to Jesus meeting with Phil about his attitude, so where the metal hits the meat best.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:group --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:cover {\"overlayColor\":\"nv-dark-bg\",\"minHeight\":600,\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-dark-bg-background-color has-background-dim-100 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:spacer {\"height\":\"80px\"} -->\n<div style=\"height:80px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:columns {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50{ebb17252add153fc365f7f06ab560ea31fac5a6752d14bde74b7c6c7fac7cf68}\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50{ebb17252add153fc365f7f06ab560ea31fac5a6752d14bde74b7c6c7fac7cf68}\"><!-- wp:heading {\"textColor\":\"nv-text-dark-bg\"} -->\n<h2 class=\"wp-block-heading has-nv-text-dark-bg-color has-text-color\">We are driven by values</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"textColor\":\"nv-text-dark-bg\"} -->\n<p class=\"has-nv-text-dark-bg-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Line high touch client we need to have a Come to Jesus meeting with Phil about his attitude, so where the.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-primary\"} -->\n<div class=\"wp-block-button is-style-primary\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">LET’S TALK</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50{ebb17252add153fc365f7f06ab560ea31fac5a6752d14bde74b7c6c7fac7cf68}\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50{ebb17252add153fc365f7f06ab560ea31fac5a6752d14bde74b7c6c7fac7cf68}\"><!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"https://planty.local/app/themes/neve/assets/img/starter-content/card-02.jpg\" alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:group --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:cover {\"overlayColor\":\"nv-site-bg\",\"minHeight\":420,\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull\" style=\"min-height:420px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-site-bg-background-color has-background-dim-100 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":\"80px\"} -->\n<div style=\"height:80px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"ticss-4ce656f1\"} -->\n<div class=\"wp-block-column ticss-4ce656f1\"><!-- wp:image {\"width\":48,\"height\":48,\"className\":\"icon-style is-style-rounded\"} -->\n<figure class=\"wp-block-image is-resized icon-style is-style-rounded\"><img src=\"https://planty.local/app/themes/neve/assets/img/starter-content/icon-03.svg\" alt=\"\" width=\"48\" height=\"48\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"24px\"} -->\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->\n<h3 class=\"wp-block-heading has-text-align-left has-text-align-center has-neve-text-color-color has-text-color\">Super Efficient</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":15}},\"textColor\":\"neve-text-color\"} -->\n<p class=\"has-text-align-left has-neve-text-color-color has-text-color\" style=\"font-size:15px\">Lorem ipsum dolor sit amet elit do, consectetur adipiscing, sed eiusmod tempor.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"ticss-f6fc7494\"} -->\n<div class=\"wp-block-column ticss-f6fc7494\"><!-- wp:image {\"width\":48,\"height\":48,\"className\":\"icon-style is-style-rounded\"} -->\n<figure class=\"wp-block-image is-resized icon-style is-style-rounded\"><img src=\"https://planty.local/app/themes/neve/assets/img/starter-content/icon-03.svg\" alt=\"\" width=\"48\" height=\"48\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"24px\"} -->\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->\n<h3 class=\"wp-block-heading has-text-align-left has-text-align-center has-neve-text-color-color has-text-color\">Deeply Committed</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":15}},\"textColor\":\"neve-text-color\"} -->\n<p class=\"has-text-align-left has-neve-text-color-color has-text-color\" style=\"font-size:15px\">Lorem ipsum dolor sit amet elit do, consectetur adipiscing, sed eiusmod tempor.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"ticss-a5b4df29\"} -->\n<div class=\"wp-block-column ticss-a5b4df29\"><!-- wp:image {\"width\":48,\"height\":48,\"className\":\"icon-style is-style-rounded\"} -->\n<figure class=\"wp-block-image is-resized icon-style is-style-rounded\"><img src=\"https://planty.local/app/themes/neve/assets/img/starter-content/icon-03.svg\" alt=\"\" width=\"48\" height=\"48\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"24px\"} -->\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->\n<h3 class=\"wp-block-heading has-text-align-left has-text-align-center has-neve-text-color-color has-text-color\">Highly Skilled</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":15}},\"textColor\":\"neve-text-color\"} -->\n<p class=\"has-text-align-left has-neve-text-color-color has-text-color\" style=\"font-size:15px\">Lorem ipsum dolor sit amet elit do, consectetur adipiscing, sed eiusmod tempor.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:spacer {\"height\":\"30px\"} -->\n<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:cover {\"overlayColor\":\"nv-light-bg\",\"minHeight\":600,\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-light-bg-background-color has-background-dim-100 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:spacer {\"height\":\"80px\"} -->\n<div style=\"height:80px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"className\":\"is-style-default\"} -->\n<figure class=\"wp-block-image aligncenter is-style-default\"><img src=\"https://planty.local/app/themes/neve/assets/img/starter-content/team-01.jpg\" alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"24px\"} -->\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"neve-text-color\"} -->\n<h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Keith Marshall</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->\n<p class=\"has-text-align-center has-neve-text-color-color has-text-color\">Designer</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:social-links {\"align\":\"center\"} -->\n<ul class=\"wp-block-social-links aligncenter\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"#\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /--></ul>\n<!-- /wp:social-links -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"className\":\"is-style-default\"} -->\n<figure class=\"wp-block-image aligncenter is-style-default\"><img src=\"https://planty.local/app/themes/neve/assets/img/starter-content/team-02.jpg\" alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"24px\"} -->\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"neve-text-color\"} -->\n<h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">George Williams</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->\n<p class=\"has-text-align-center has-neve-text-color-color has-text-color\">Developer</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:social-links {\"align\":\"center\"} -->\n<ul class=\"wp-block-social-links aligncenter\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"#\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /--></ul>\n<!-- /wp:social-links -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"className\":\"is-style-default\"} -->\n<figure class=\"wp-block-image aligncenter is-style-default\"><img src=\"https://planty.local/app/themes/neve/assets/img/starter-content/team-03.jpg\" alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"24px\"} -->\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"neve-text-color\"} -->\n<h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Julia Castillo</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->\n<p class=\"has-text-align-center has-neve-text-color-color has-text-color\">Client Service</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:social-links {\"align\":\"center\"} -->\n<ul class=\"wp-block-social-links aligncenter\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"#\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /--></ul>\n<!-- /wp:social-links -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:group --></div></div>\n<!-- /wp:cover -->','Nous rencontrer','','publish','closed','closed','','nous-rencontrer','','','2023-07-15 12:05:24','2023-07-15 12:05:24','',0,'https://planty.local/?page_id=6',0,'page','','0');");
				$lastid = $wpdb->insert_id;
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_customize_changeset_uuid','e14158e8-26a2-4856-9448-fce82d198207');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'neve_meta_disable_title','on');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'neve_meta_enable_content_width','on');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'neve_meta_content_width','100');");
				$wpdb->query("INSERT INTO wp_postmeta (post_id,meta_key,meta_value) VALUES ($lastid,'_wp_helper_migrations_id','be1e619e-fa6e-4363-a1db-c51f7a5bc839');");

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