<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-inner">

        <?php if ('' !== get_the_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('petie-featured-image-full'); ?>
                </a>

                <?php
                if (!is_single()) { ?>
                    <div class="posted-on"> <?php petie_posted_on(); ?> </div>
                <?php } ?>

            </div><!-- .post-thumbnail -->
        <?php endif; ?>
        <header class="entry-header">
            <?php

            if (is_single()) {

            } elseif (is_front_page() && is_home()) {
                the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
            } else {
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            }
            ?>

            <div class="entry-meta">
                <?php if (is_single()) : ?>
                    <?php petie_posted_on(); ?>
                <?php endif; ?>
                <?php petie_time_link(); ?>
            </div><!-- .entry-meta -->

        </header><!-- .entry-header -->

        <div class="entry-content">

            <?php
            /* translators: %s: Name of current post */
            the_content(sprintf(
                __('Read more<span class="screen-reader-text"> "%s"</span>', 'petie'),
                get_the_title()
            ));

            if (is_single() || '' === get_the_post_thumbnail()) {
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'petie'),
                    'after' => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after' => '</span>',
                ));

            };
            ?>
        </div><!-- .entry-content -->
        <?php
        if (is_single()) {
            petie_entry_footer();
            petie_social_share();
        }
        ?>
    </div>

</article><!-- #post-## -->
