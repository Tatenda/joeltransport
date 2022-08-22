<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Description here">


        <?php wp_head() ?>
    </head>
    <body>
        <header>
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
