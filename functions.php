<?php 
//theme support
function school_site_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    register_nav_menus(array(
        'primary' =>_('Primary Menu')
    ));
}
add_action('after_setup_theme', 'school_site_theme_support');
//add style
function add_theme_styles() {
    wp_enqueue_style('style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css');
    wp_enqueue_style('style-owl-carousel', get_template_directory_uri().'/owl/owl.carousel.css');
    wp_enqueue_style('style-owl-min-css', get_template_directory_uri().'/owl/owl.carousel.min.css');
    wp_enqueue_style('style-owl-theme', get_template_directory_uri().'/owl/owl.theme.default.css');
    wp_enqueue_style('style-AOS', 'https://unpkg.com/aos@next/dist/aos.css');
}
add_action('wp_enqueue_scripts', 'add_theme_styles');
//Add script
function add_theme_scripts() {
    // <!-- counter -->
    wp_enqueue_script('jquery', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('waypoints-min', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('counterup-min', 'http://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('jquery-ui', 'http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js', array( 'jquery' ), '', true);
    // <!-- owlcarousel -->
    wp_enqueue_script('carousel', get_template_directory_uri(  ) . '/owl/owl.carousel.min.js');
    // <!-- Bootstrap core JavaScript -->
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');
    // <!-- main -->
    wp_enqueue_script('main', get_template_directory_uri(  ). '/script/main.js', array( 'jquery' ), '', true);
    // <!-- AOS -->
    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@next/dist/aos.js');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
// excerpt
function new_excerpt_text() {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_text');
function set_excerpt_length() {
  return 55;
}
add_filter('excerpt_length', 'set_excerpt_length');
//Add widgets
function widgets() {
  register_sidebar(array(
    'name' => 'Footer misia',
    'id' => 'footer-misia',
    'before_widget' => '<div class="col-md-3 misija">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  ));
  register_sidebar(array(
    'name' => 'Footer contact',
    'id' => 'footer-contact',
    'before_widget' => '<div class="col-md-3">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  ));
  register_sidebar(array(
    'name' => 'Footer menu',
    'id' => 'footer-menu',
    'before_widget' => '<div class="col-md-6">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  ));
}
add_action('widgets_init', 'widgets');
//display a list of the latest posts
function list_latest_posts() {
  $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
  );
  $latest_posts = new WP_Query( $args );
  if ( $latest_posts->have_posts() ) {
      echo '<div class="latest-post">';
      while ( $latest_posts->have_posts() ) {
          $latest_posts->the_post();
          $post_title = get_the_title();
          $post_thumbnail = get_the_post_thumbnail();
          $post_author = get_the_author();
          $post_link = get_the_permalink();
          $post_date = get_the_date();
          echo '<div class="row mb-2">';
              echo '<div class="col">';
                  echo '<a href="' . $post_link . '" class="link-secondary">' . $post_thumbnail . '</a>';
              echo '</div>';    
              echo '<div class="col">';
                  echo '<h5 class="the-post"><a href="' . $post_link . '">' . $post_title . '</a></h5>';
                  echo '<span class="post-date">'.$post_date.'</span>';
              echo '</div>';
          echo '</div>';
      }
      echo '</div>';
  }
  wp_reset_postdata();
}
add_filter('display_latets_post', 'list_latest_posts');
// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');