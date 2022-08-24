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
                <ul id="" class="top-menu row">
                    <li  class="col-2 "><a href="tel://+27 12 666 9055">+27 12 666 9055</a></li>
                    <li class="col-3 "><a href="mailto:sales@joeltransport.co.za">sales@joeltransport.co.za</a></li>
                    <li class=" col-2 offset-5">
                        <a href="https://twitter.com/JoelsTransport" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/ptyltd.joeltransport/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/Joel.Transport1965/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <a class="navbar-brand text-uppercase" href="/">
                            <img src="https://joeltransport.co.za/wp-content/uploads/2020/07/LOGO-01.png" alt="footer logo" />
                        </a>
                    </div>
                    <div class="col-8">
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
					<div class="col-2">
                         <a class="btn btn_quote" href="/quote" role="button">Get a qoute</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
