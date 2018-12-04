<?php  
function mw_customize_register($wp_customize){
  // Showcase Section
  $wp_customize->add_section('showcase', array(
    'title' => __('Showcase', 'materialworld'),
    'description' => sprintf(__('Options for showcase', 'materialworld')),
    'priority' => 130
  ));

  $wp_customize->add_setting('showcase_image', array(
    'default' => get_bloginfo('template_directory').'/img/showcase.jpg', 'materialworld',
    'type'  => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
    'label' => __('Showcase Image', 'materialworld'),
    'section' => 'showcase', 
    'settings' => 'showcase_image',
    'priority'  =>  1
  )));

  $wp_customize->add_setting('showcase_heading', array(
    'default' => _x('Serving the Catholic Community for Over 30 Years', 'materialworld'),
    'type'  => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_heading', array(
    'label' => __('Heading', 'materialworld'),
    'section' => 'showcase', 
    'priority'  =>  2
  ));

  $wp_customize->add_setting('showcase_cta', array(
    'default' => _x('Call Now', 'materialworld'),
    'type'  => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_cta', array(
    'label' => __('Call To Action', 'materialworld'),
    'section' => 'showcase', 
    'priority'  =>  3
  ));

  $wp_customize->add_setting('showcase_blue', array(
    'default' => _x('877-549-1212', 'materialworld'),
    'type'  => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_blue', array(
    'label' => __('Highlighted CTA Suffix', 'materialworld'),
    'section' => 'showcase', 
    'priority'  =>  4
  ));

  $wp_customize->add_setting('btn_url', array(
    'default' => _x('tel:+1-877-549-1212', 'materialworld'),
    'type'  => 'theme_mod'
  ));

  $wp_customize->add_control('btn_url', array(
    'label' => __('Button URL', 'materialworld'),
    'section' => 'showcase', 
    'priority'  =>  5
  ));
}

add_action('customize_register', 'mw_customize_register');