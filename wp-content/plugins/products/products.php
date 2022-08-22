<?php
/**
* Plugin Name: Products
*/

function jt_products() {
    register_post_type('Product',
        array(
            'labels' => array(
                'name' => __('Products'),
            ),
            'menu_position' => 5,
            'public' => true,
            'supports' => array('title', 'editor')
        )
    );
}

add_action('init', 'jt_products');

function jt_products_metabox() {
    add_meta_box('jt_products_metabox_fields');
}

function get_products_post_type() {
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'product'
    );

    $products = get_posts($args);
    $content = '';

    foreach ($products as $key => $value) {
        $content .= '<div class="col col-md-4 col-lg-4">';
        $content .= '<div class="service card">';
        $content .= '<h3 class="title">'. $value->post_title . '</h3>';
        $content .= '<div class="content">'. $value->post_content . '</div>';
        $content .= '</div></div>';
    }

    return $content;
}

add_shortcode('get_products', 'get_products_post_type');
