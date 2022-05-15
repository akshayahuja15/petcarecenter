<?php
get_header(); ?>
    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php if (get_theme_mod('osf_page_404_page_enable') != 'default' && !empty(get_theme_mod('osf_page_404_page_custom'))): ?>
                    <?php $query = new WP_Query('page_id=' . get_theme_mod('osf_page_404_page_custom'));
                    if ($query->have_posts()):
                        while ($query->have_posts()) : $query->the_post();
                            the_content();
                        endwhile;
                    endif; ?>
                <?php else: ?>
                    <section class="error-404 not-found">
                        <div class="page-content">
                            <div class="svg-bkg">
                                <img src="<?php echo get_theme_file_uri('assets/images/404.jpg') ?>">
                            </div>
                            <div class="error-404-title">
                                <div class="error-text">
                                    <?php esc_html_e('Page doesn’t exist or some other error occured. Go to our', 'petie'); ?>
                                    <br>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="return-homepage c-primary"><?php esc_html_e('Home page', 'petie'); ?></a>
                                    <?php esc_html_e('or go back to', 'petie'); ?>
                                    <a href="javascript: history.go(-1)" class="go-back c-primary"><?php esc_html_e('Previous page', 'petie'); ?></a>
                                </div>
                            </div>
                        </div>
                    </section><!-- .error-404 -->
                <?php endif; ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
