<?php

// Excerpt Length Control
function set_excerpt_length(){
  return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');


function mmogo_register_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css", array(), '6.1.2', 'all');
  wp_enqueue_style('boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '5.2.0', 'all');
  wp_enqueue_style('mmogo-custom-temp', get_template_directory_uri() . "/css/additional.css", array(), $version, 'all');
  wp_enqueue_style('mmogo-custom', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  wp_enqueue_style('mmmo-styles', get_template_directory_uri() . "/css/extra-styles.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'mmogo_register_styles');

function mmogo_register_scripts() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('boostrap-bundle', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js", array(), '5.2.0', 'all');
  wp_enqueue_script('mmogo-custom', get_template_directory_uri() . "/js/main.js", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'mmogo_register_scripts');

add_filter('show_admin_bar', '__return_false');


add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
  wp_dequeue_style( 'wp-block-library' ); // WordPress core
  wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
  wp_dequeue_style( 'wc-block-style' ); // WooCommerce
  wp_dequeue_style( 'storefront-gutenberg-blocks' );
}
