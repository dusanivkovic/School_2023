<?php get_header('blog'); ?>
<section class="container-fluid blog-single py-5">
    <main class="col-lg-8">
        <div class="row">
            <article class="news-single px-md-5 my-3">
                <?php  if(have_posts()): while(have_posts()): the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail(); ?>
                <div class="blog-item-content text-primary">
                    <span><i class="fas fa-user-edit"></i><?php the_author(); ?></span>
                    <span><i class="fas fa-clock"></i><?php the_date(); ?></span>
                </div>
                <?php the_content(); ?>
                <?php endwhile; else:?>
                    <?php _e('nothing to show'); ?>
                <?php endif; ?>
            </article>
        </div>
    </main>
    <aside class="col-lg-4 mx-auto">
            <?php get_sidebar(); ?>
    </aside>
</section>
<?php get_footer('blog'); ?>