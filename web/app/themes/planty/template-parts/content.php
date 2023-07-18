<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

        <div class="entry-content">

                <?php the_content(__('Continue reading', 'twentytwenty')) ?>

        </div><!-- .entry-content -->

    </div><!-- .post-inner -->
</article>