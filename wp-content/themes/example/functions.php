<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script( 'slick-slider-core' );
    wp_enqueue_style( 'slick-slider-core-theme' );
}, 11 );

function mmogo_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mmogo_theme_support');

function mmogo_menus() {
    $locations = array(
        "top-menu" => "Top Menu",
        "primary" => "Main Navigation",
        "footer" => "Footer Main Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'mmogo_menus');


function mmogo_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css", array(), '6.1.2', 'all');
    wp_enqueue_style('boostrap', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css", array(), '5.2.0', 'all');
    wp_enqueue_style('mmogo-custom', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'mmogo_register_styles');


function mmogo_register_scripts() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js", array(), '5.2.0', 'all');
    wp_enqueue_script('mmogo-custom', get_template_directory_uri() . "/assets/js/main.js", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'mmogo_register_scripts');

?>
