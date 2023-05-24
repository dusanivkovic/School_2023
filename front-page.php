<?php get_header(); ?>

<!-- Tabs -->
<section class="container-fluid" id="tabs">
  <div class="wrapper">
    <h2 class="py-2"><?php the_field('ednevnik-naslov') ?></h2>
    <div class="buttonWrapper">
      <article class="tab-button" data-id="home"><a class="btn" href="<?php the_field('parent-url') ?>"><i class="fas fa-user-friends"></i><?php the_field('roditelji') ?></a></article>
      <article class="tab-button" data-id="about"><a class="btn" href="<?php the_field('student-url') ?>"><i class="fas fa-user-graduate"></i><?php the_field('ucenici') ?></a></article>
      <article class="tab-button" data-id="contact"><a class="btn" href="<?php the_field('teachers-url') ?>"><i class="fas fa-chalkboard-teacher"></i><?php the_field('nastavnici') ?></a></article>
    </div>
  </div>
</section>
      <!-- ./Tabs -->
  <!-- C O U N T E R -->
  <section class="counter-up my-5">
    <div id="inview-example" class="counter-show container-fluid">
      <div class="common-box aos-init" data-aos="fade-up">
        <div class="counter-num">  
          <!-- Add user icon to the counter -->  
          <p><i class="fas fa-school"></i></p>
          <span class="counter" data-count="9"><?php the_field('tradition') ?></span>
					<!-- <span>+</span>      -->
          <p><?php the_field('tradition-text') ?></p>   
        </div>    
      </div>
      <div class="common-box aos-init" data-aos="fade-up">
        <div class="counter-num">  
          <!-- Add user icon to the counter -->  
          <p><i class="fas fa-chalkboard-teacher"></i></p>
          <span class="counter" data-count="9"><?php the_field('num-teacher') ?></span>
					<!-- <span>+</span>      -->
          <p><?php the_field('text-teacher') ?></p>   
        </div>    
      </div>
      <div class="common-box aos-init" data-aos="fade-up">
        <div class="counter-num">  
          <!-- Add user icon to the counter -->  
          <p><i class="fas fa-user-graduate"></i></p>
          <span class="counter" data-count="9"><?php the_field('num-student') ?></span>
					<!-- <span>+</span>      -->
          <p><?php the_field('text-student') ?></p>   
        </div>    
      </div>
    </div>
  </section>
  <!-- ./C O U N T E R -->
    <!-- last-news -->
  <section class="last-news container-fluid my-4">
    <h2><?php the_field('slider-title'); ?></h2>
    <?php
      // the query
      $args = array( 'posts_per_page' => 10 );
      $the_query = new WP_Query( $args );
    ?>
    <div class="py-2 owl-one owl-carousel owl-theme">
      <?php if($the_query->have_posts()): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="card item mx-auto">
          <?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top')); ?>
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <span class="autor"><?php the_author(); ?></span> | <?php echo get_the_date(); ?>
            <?php the_excerpt(); ?>
          </div>
          <div class="card-body">
            <a class="justify-content-center btn btn-secondary display-4" href="<?php the_permalink(); ?>"><?php _e('Више'); ?></a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php
          // clean up after the query and pagination
          wp_reset_postdata();
        ?>
        <?php else: ?>
          <?php _e('nothing to show'); ?>
        <?php endif;?>
    </div>
  </section>
    <!-- last-news -->
  <!-- P R O J E C T -->
  <section class="project">
    <div class="container-fluid py-5">
      <div class="wrapper">
        <div class="row justify-content-center">
          <div class="col-12 col-md-5 col-lg-3 aos-init" data-aos="fade-up">
            <div class="card">
              <div class="card-body">                        
                <h3 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5"><strong><?php the_field('first-project-title'); ?></strong></h3>
                <p class="mbr-text mbr-fonts-style display-7"><?php the_field('first-project-text'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5 col-lg-3 aos-init" data-aos="fade-up">
            <div class="card">
              <div class="card-body">                        
                <h3 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5"><strong><?php the_field('second-project-title'); ?></strong></h3>
                <p class="mbr-text mbr-fonts-style display-7"><?php the_field('second-project-text'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5 col-lg-3 aos-init" data-aos="fade-up">
            <div class="card bg-success">
              <div class="card-body">                        
                <h3 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5"><strong><?php the_field('third-project-title'); ?></strong></h3>
                <p class="mbr-text mbr-fonts-style display-7"><?php the_field('third-project-text'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5 col-lg-3 aos-init" data-aos="fade-up">
            <div class="card">
              <div class="card-body">                        
                <h3 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5"><strong><?php the_field('fourth-project-title'); ?></strong></h3>
                <p class="mbr-text mbr-fonts-style display-7"><?php the_field('fourth-project-text'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- ./P R O J E C T -->

<?php get_footer();?>