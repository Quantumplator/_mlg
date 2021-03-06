<?php

/**
 * Enqueue scripts and styles.
 */
function _mlg_scripts() {
  wp_enqueue_style( '_mlg-style', get_stylesheet_uri() );

  wp_enqueue_style( '_mlg-fonts', 'https://fonts.googleapis.com/css?family=Lora:700,400|Source+Sans+Pro:700,400italic,400' );

  wp_enqueue_script( '_mlg-main', get_template_directory_uri() . '/js/main.js', array(), '20151026', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', '_mlg_scripts' );