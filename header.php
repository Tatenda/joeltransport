<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

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
                <div class="row">
                    <div class="col-1">
                        <a class="navbar-brand text-uppercase" href="/">
                            <img src="https://joeltransport.co.za/wp-content/uploads/2020/07/LOGO-01.png" alt="footer logo" />
                        </a>
                    </div>
                    <div class="col-10">
                        <?php
                            wp_nav_menu(array(
                                "menu" => "primary",
                                "container" => "div",
                                "container_class" => "navigation-inner",
                                "theme_location" => "primary",
                                'items_wrap' => '<ul id="" class="navbar">%3$s</ul>'
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
