<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
  <?php wp_head(); ?>
</head>
<body>
  <!-- H E A D D E R -->
  <header>
    <img class="hero-image" src="<?php echo esc_url(get_template_directory_uri())?>/img/pexels-pixabay-301926.jpg" alt="">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo esc_url(home_url()) ?>"><?php the_field('logo-txt'); ?></a>
        <button class="navbar-toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
          <a class="btn btn-outline-secondary my-2 display-4" href="<?php the_field('contact-btn'); ?>"><?php the_field('tekst-btn'); ?></a>
        </div>
      </div>
    </nav>
    <div class="hero">
      <div class="px-3 py-5 p-lg-5">
        <div class="row align-items-end">
          <div class="col-md-6 col-12">
              <h1 class="display-1"><span class="typing-heading"><?php the_field('hero-heading') ?></span></h1>
          </div>
          <div class="col-md-6 col-12 d-flex align-items-end justify-content-end">
            <strong class="display-7"></strong><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-12 d-flex align-items-end">
            <strong class="display-7"><?php the_field('paragraf-hero') ?></strong><br>
          </div>
          <div class="col-6 d-flex">
            <a class="btn btn-secondary my-2 display-4" href= <?php the_field('btn-herourl') ?>><?php the_field('btn-hero') ?></a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </header>