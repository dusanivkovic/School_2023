<?php 
/* 
Template Name: Page 
*/
get_header(); ?>
<section class="page">
    <div class="container-fluid">
        <div class="wrapper p-3 py-5 p-lg-5 mb-2">
            <div class="row justify-content-center p-5">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="mb-3">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
                <?php echo wp_apautop('Sorry, no posts were found'); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>