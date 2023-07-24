<!DOCTYPE html>
<html class="no-js" <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header id="site-header" class="header-footer-group">

        <div class="header-inner section-inner">

            <div class="header-titles-wrapper">

                <div class="header-titles">

                    <?php
                    // Site title or logo.
                    twentytwenty_site_logo();

                    // Site description.
                    twentytwenty_site_description();
                    ?>

                </div><!-- .header-titles -->

                <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                    <span class="toggle-inner">
                        <span class="toggle-icon">
                            <?php twentytwenty_the_theme_svg('ellipsis'); ?>
                        </span>
                    </span>
                </button><!-- .nav-toggle -->

            </div><!-- .header-titles-wrapper -->

            <div class="header-navigation-wrapper">

                <?php if (has_nav_menu('primary')) : ?>

                    <nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'twentytwenty'); ?>">

                        <ul class="primary-menu reset-list-style">

                            <?php
                            wp_nav_menu(
                                array(
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'primary',
                                )
                            );
                            ?>

                        </ul>

                    </nav><!-- .primary-menu-wrapper -->

                <?php endif ?>
            </div><!-- .header-navigation-wrapper -->

        </div><!-- .header-inner -->
    </header>

    <?php get_template_part( 'template-parts/modal-menu' );