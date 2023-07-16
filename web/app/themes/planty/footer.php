<?php if (has_nav_menu('footer')) : ?>
    <footer id="site-footer" class="header-footer-group">
        <nav aria-label="<?php esc_attr_e('Footer', 'twentytwenty'); ?>" class="footer-menu-wrapper">

            <ul class="footer-menu reset-list-style">
                <?php
                wp_nav_menu(
                    array(
                        'container'      => '',
                        'depth'          => 1,
                        'items_wrap'     => '%3$s',
                        'theme_location' => 'footer',
                    )
                );
                ?>
            </ul>

        </nav><!-- .site-nav -->
    </footer><!-- #site-footer -->
<?php endif ?>
<?php wp_footer() ?>
</body>

</html>