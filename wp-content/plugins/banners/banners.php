<?php
/*
   Plugin Name: Banners
   Plugin URI: https://mmogomedia.com/wordpress/plugins/mmogo-booking
   description:
   Version: 1.0
   Author: Mmogo Media
   Author URI: https://mmogomedia.com
   License: MIT License

*/

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

function jt_slides() {
    register_post_type('Slides',
        array(
            'labels' => array(
                'name' => __('Slides'),
            ),
            'menu_position' => 6,
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}

add_action('init', 'jt_slides');

function jt_show_slides () {
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'slides'
    );

    $slides = new WP_Query($args);
    $content = '<div id="hero" class="carousel slide" data-bs-ride="carousel">';
        // $content .='<div class="carousel-indicators">';
            // $content .='<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
            // $content .='<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>';
            // $content .='<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>';
        // $content .='</div>';
        $content .='<div class="carousel-inner">';
            // Add foreach here
            if ($slides->have_posts() ):
                while ($slides->have_posts()):
                    $slides->the_post();
                    $content .='<div class="carousel-item">';
                        $content .='<img src="http://localhost/wp-content/uploads/2022/08/Hero-image-3_2500px-x-800px.jpg" class="d-block w-100">';
                        $content .='<div class="carousel-caption d-none d-md-block">';
                            $content .='<h5>'. the_title() .'</h5>';
                            $content .='<p>'. the_content() .'</p>';
                        $content .='</div>';
                    $content .='</div>';
                endwhile;
            endif;

            // endforeach
            // $content .='<button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">';
                // $content .='<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                // $content .='<span class="visually-hidden">Previous</span>';
            // $content .='</button>';
            // $content .='<button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">';
                // $content .='<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                // $content .='<span class="visually-hidden">Next</span>';
            // $content .='</button>';
        $content .='</div>';
    $content .='</div>';
    return $content;
}

add_theme_support('post-thumbnails');
add_image_size('jt_slides', 2500, 800);
add_shortcode('jt_slides', 'jt_show_slides');
