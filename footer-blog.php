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