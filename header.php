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
                <!-- <?php
                wp_nav_menu(array(
                    "menu" => "top-menu",
                    "container" => "",
                    "theme_location" => "top-menu",
                    'items_wrap' => '<ul id="" class="top-menu">%3$s</ul>'
                ));
                ?> -->

                <!-- <ul class="top-menu">
                    <li>+27 12 666 9055</li>
                    <li></li>
                    <li></li>
                </ul> -->

                <ul id="" class="top-menu row">
                    <li  class="col-2 "><a href="tel://0731946286">+27 12 666 9055</a></li>
                    <li class="col-3 "><a>sales@joeltransport.co.za</a></li>
                    <li class=" col-2 offset-5">
                        <a href="https://www.twitter.com/joeltransport"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/joeltransport"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/joeltransport"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <!-- <li id="menu-item-122" class="top-menu-right menu-item menu-item-type-custom menu-item-object-custom menu-item-122"><a href="https://www.instagram.com/joeltransport"><i class="fa-brands fa-instagram"></i></a></li> -->
                    <!-- <li id="menu-item-121" class="top-menu-right menu-item menu-item-type-custom menu-item-object-custom menu-item-121"><a href="https://www.facebook.com/joeltransport"><i class="fa-brands fa-facebook"></i></a></li> -->
                </ul>

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
