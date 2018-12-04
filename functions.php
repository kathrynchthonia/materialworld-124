<?php


// // Register wp-materialize-navwalker
// require_once get_template_directory() . '/Walker_Nav_Primary.php';
// Register wp-materialize-navwalker
require_once get_template_directory() . '/wp_materialize_navwalker.php';

// // Register Bootstrap Navigation Walker
// require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';




// Theme Support
function mw_theme_setup() {

  // Thumbnails
  add_theme_support('post-thumbnails');
  // Nav Menus
  register_nav_menus(array(
          'Primary'   =>  __( 'Primary Menu'),
          'Mobile'   =>  __( 'Mobile Menu')
      )
  );


  
}

add_action('after_setup_theme', 'mw_theme_setup');

  // Excerpt Length Control
  function set_excerpt_length(){
    return 60;
  }

  add_filter('excerpt_length', 'set_excerpt_length');

  function mw_init_widgets($id){
    register_sidebar(array(
      'name' => 'Sidebar',
      'id'  => 'sidebar',
      'before_widget' => '<div class="container my25 white-text">',
      'after_widget'  => '</div>',
      'before_title' => '<h4 class="white-text center indigo darken-1 z-depth-4 mt-50">',
      'after_title'  => '</h4>'
    ));
    register_sidebar(array(
      'name' => 'Mobile Navbar',
      'id'  => 'mobilenav',
      'before_widget' => '<div class="container my25 white-text">',
      'after_widget'  => '</div>'
    ));
  }

  add_action('widgets_init', 'mw_init_widgets');

  // Customizer File
  require get_template_directory(). '/inc/customizer.php';