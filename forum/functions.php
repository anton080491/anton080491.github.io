<?php

add_action( 'wp_enqueue_scripts', 'my_styles_method');
  function my_styles_method(){
    wp_enqueue_style( 'forum_style', get_stylesheet_uri() );
    wp_enqueue_style( 'forum_animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'forum_normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'preloader', get_template_directory_uri() . '/assets/css/preloader.css' );
    wp_enqueue_style( 'slick-theme.css', get_template_directory_uri() . '/assets/slick-1.8.1/slick-1.8.1/slick/slick-theme.css' );
    wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/assets/slick-1.8.1/slick-1.8.1/slick/slick.css' );
    wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', array(), '5.0.0' );
  }


add_action( 'wp_enqueue_scripts', 'my_scripts_method');
  function my_scripts_method(){
    wp_enqueue_script( 'forum-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/assets/slick-1.8.1/slick-1.8.1/slick/slick.min.js', array(), null, true); 
    wp_enqueue_script( 'preloader-scripts', get_template_directory_uri() . '/assets/js/preloader.js', array(), null, true); 
    wp_enqueue_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', array( 'jquery' ), '2.5.4', true );
	  wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', array( 'jquery' ), '5.0.0', true );
}








add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'hover', 'hover-Menu' );
  register_nav_menu( 'second-hover', 'second-hover-Menu' );
  register_nav_menu( 'footer', 'footer-menu' );
}


add_action( 'wp_enqueue_scripts', 'my_jquery_scripts' );
function my_jquery_scripts() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
  wp_enqueue_script( 'jquery' ); 
}


    




add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

?>