<?php get_header(); ?>
<section class="container-fluid blog py-5">
    <main class="col-lg-8">
        <div class="row px-4">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="row align-items-center col-sm-6 news px-md-5 mx-auto">
                <div class="blog-item-content text-primary col-md-7 my-auto py-1">
                    <h4><a href="<?php the_permalink(); ?>" class="title-link"><?php the_title(); ?></a></h4>
                    <span><i class="fas fa-clock"></i><?php echo get_the_date(); ?></span>
                </div>
                <div class="col-md-5 py-1">
                    <?php the_post_thumbnail(); ?>
                </div>
            </article>
            <?php endwhile; ?>
            <?php the_posts_pagination( array(
                        'mid_size' => 1,
                        'prev_text' => __( '<<', 'textdomain' ),
                        'next_text' => __( '>>', 'textdomain' ),
                    ) ); ?>
            <?php else: ?>
                <?php _e('nothing to show'); ?>
            <?php endif; ?>
        </div>
    </main>
    <aside class="col-lg-4 mx-auto">
        <?php get_sidebar(); ?>
    </aside>
</section>

<?php get_footer(); ?>