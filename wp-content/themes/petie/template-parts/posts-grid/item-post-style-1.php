<div class="column-item post-style-1">
    <div class="post-inner">
        <?php if (has_post_thumbnail() && '' !== get_the_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('petie-featured-image-large'); ?>
                </a>

                <div class="posted-on"> <?php petie_posted_on(); ?> </div>
            </div><!-- .post-thumbnail -->
        <?php endif; ?>
        <div class="post-content">
            <div class="entry-header">
                <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="entry-meta ">
                <?php petie_time_link(); ?>
            </div>
            <div class="entry-content">
                <?php echo wp_trim_words(get_the_content(), 20); ?>
            </div>
        </div>
    </div>
</div>