<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

<style>
        .blog-nav {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
        }

        .showcase {
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/Hero_image_1_2500px_x_800px.jpg'); ?>) no-repeat center center;
        }
    </style>
</head>

<body>
    <header class="fixed-top">
            <div class="top-menu">
                <div class="container">
                    <?php
                        wp_nav_menu(array(
                            "menu" => "top-menu",
                            "container" => "",
                            "theme_location" => "top-menu",
                            'items_wrap' => '<ul id="" class="top-menu">%3$s</ul>'
                        ));
                    ?>
                </div>
            </div>
            <div class="navigation">
                <div class="container">
                    <?php
                        wp_nav_menu(array(
                            "menu" => "primary",
                            "container" => "",
                            "theme_location" => "primary",
                            'items_wrap' => '<ul id="" class="navbar">%3$s</ul>'
                        ));
                    ?>
                </div>
            </div>
    </header>
