<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <!-- Import Google Fonts -->
    <link defer
      href="https://fonts.googleapis.com/css?family=Cinzel|Lato"
      rel="stylesheet"
    />
    <!-- Import Google Icon Font -->
    <link defer
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link defer
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />


    <!-- Import materialize.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Prevent browser from autoformatting phone numbers -->
    <meta name="format-detection" content="telephone=no">
    
    <title><?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : 
     wp_title(); ?>
    </title>
    <?php wp_head(); ?>
    </head>

  <body id="home" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="blue darken-2">
        <div class="nav-wrapper pr-0">
          <!-- .sr Classes call scroll reveal on elements -->
          <a href="#" class="brand-logo amber-text text-darken-2 bold hoverable"
          ><?php bloginfo('name'); ?></a
          >
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <div class="right hide-on-med-and-down">
          <?php
              wp_nav_menu( array(
                  'menu' => 'Primary',
                  'theme_location'=>'Primary',
                  'menu_class' => 'hide-on-med-and-down',
                  'walker' => new wp_materialize_navwalker()
              ));
          ?>
        </div>
      </nav>
    </div>

        <!-- Mobile Nav -->
          <!-- Widget area -->
          <?php if(is_active_sidebar('mobilenav')): ?>
            <?php dynamic_sidebar('mobilenav'); ?>
          <?php endif; ?>
          <!-- End widget area -->
      <!-- End Mobile nav -->



    <!-- End Header -->

      