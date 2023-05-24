<!-- S L I D E R -->
<section id="owl-one">
  <div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item"><a href="#" class="img-box"><img src="<?php echo esc_url(get_template_directory_uri(  )); ?>/img/dositej-logo2.png" alt=""></a></div>
    <div class="item"><a href="#" class="img-box"><img src="<?php echo esc_url(get_template_directory_uri(  )); ?>/img/eduis-ednevnik2.png" alt=""></a></div>
    <div class="item"><a href="#" class="img-box"><img src="<?php echo esc_url(get_template_directory_uri(  )); ?>/img/eNastava-logo-2.png" alt=""></a></div>
    <div class="item"><a href="#" class="img-box"><img src="<?php echo esc_url(get_template_directory_uri(  )); ?>/img/logo-eUcionica2.png" alt=""></a></div>
    <div class="item"><a href="#" class="img-box"><img src="<?php echo esc_url(get_template_directory_uri(  )); ?>/img/min-logo.jpg" alt=""></a></div>
    <div class="item"><a href="#" class="img-box"><img src="<?php echo esc_url(get_template_directory_uri(  )); ?>/img/rpz-logo.jpg" alt=""></a></div>
</div>
</section>
<footer>
  <div class="container-fluid pt-5">
    <div class="row align-items-start justify-content-between">
      <?php if(is_active_sidebar('footer-misia')): ?>
        <?php dynamic_sidebar('footer-misia'); ?>
      <?php endif; ?>
      <?php if(is_active_sidebar('footer-menu')): ?>
        <?php dynamic_sidebar('footer-menu'); ?>
      <?php endif; ?>
      <?php if(is_active_sidebar('footer-contact')): ?>
        <?php dynamic_sidebar('footer-contact'); ?>
      <?php endif; ?>
    </div>
    <div class="pb-2 text-center"><span class="mx-2 small"><?php the_field('copyright-text'); ?></span><a href="https://github.com/dusanivkovic/School_2023"><i class="fab fa-github-square"></i></a></div>
  </div>
  <?php wp_footer(); ?>
</footer>
<script>
  AOS.init();
</script>
</body>
</html>