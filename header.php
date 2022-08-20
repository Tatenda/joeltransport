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
    <header>
      <nav
        class="navbar navbar-expand-sm navbar-light bg-light fixed-top shadow"
      >
        <div class="top-menu">
            <?php
                wp_nav_menu(array(
                    "menu" => "top-menu",
                    "container" => "",
                    "theme_location" => "top-menu",
                    'items_wrap' => '<ul id="" class="top-menu">%3$s</ul>'
                ));
            ?>
        </div>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a class="navbar-brand text-uppercase" href="#"
                            ><img
                            src="./img/JOEL-TRANSPORT-LOGO-APPROVED-NR-1.svg"
                            alt="footer logo"
                        /></a>
                        <button
                            class="navbar-toggler d-lg-none"
                            type="button"
                            data-toggle="collapse"
                            data-target="#collapsibleNavId"
                            aria-controls="collapsibleNavId"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav m-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a
                                class="nav_link dropdown-toggle text-uppercase"
                                href="#"
                                id="dropdownId"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >HOME MOVES</a
                                >
                                <!-- Local Move, International move, packing services, packing material, storage, insurance, Specialized, Pets, vehicle transport, fine art,Dangerous goods -->

                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Local moves</a>
                                <a class="dropdown-item" href="#">International removals</a>
                                <a class="dropdown-item" href="#">Packing services</a>
                                <a class="dropdown-item" href="#">Packing material</a>
                                <a class="dropdown-item" href="#">Storage</a>
                                <a class="dropdown-item" href="#">Insurance</a>
                                <a class="dropdown-item text-uppercase" href="#"
                                    >Specialized</a
                                >
                                <a class="dropdown-item" href="#">Pets</a>
                                <a class="dropdown-item" href="#">Vehicle transport</a>
                                <a class="dropdown-item" href="#">Fine art</a>
                                <a class="dropdown-item" href="#">Dangerous goods</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                class="nav_link dropdown-toggle text-uppercase"
                                href="#"
                                id="dropdownId"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >OFFICE REMOVALS</a
                                >
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Office removals</a>
                                <a class="dropdown-item" href="#">Packing services</a>
                                <a class="dropdown-item" href="#">Packing material</a>
                                <a class="dropdown-item" href="#">Document Storage</a>
                                <a class="dropdown-item" href="#">Insurance</a>
                                <a class="dropdown-item text-uppercase" href="#"
                                    >Specialized</a
                                >
                                <a class="dropdown-item" href="#">Vehicle transportation</a>
                                <a class="dropdown-item" href="#">Dangerous goods</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown text-uppercase">
                                <a
                                class="nav_link text-uppercase dropdown-toggle"
                                href="#"
                                id="dropdownId"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >RESOURCES</a
                                >
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Moving tips</a>
                                <a class="dropdown-item" href="#">Home checklist</a>
                                <a class="dropdown-item" href="#">Office checklist</a>
                                <a class="dropdown-item" href="#">Faqs</a>
                                <a class="dropdown-item text-uppercase" href="#">Documents</a>
                                <a class="dropdown-item" href="#"
                                    ><i class="fa fa-file-o" aria-hidden="true"></i> Home
                                    inventory list</a
                                >
                                <a class="dropdown-item" href="#"
                                    ><i class="fa fa-file-o" aria-hidden="true"></i> AMOSA
                                    certificate</a
                                >
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav_link active text-uppercase" href="#">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav_link active text-uppercase" href="#">CONTACT</a>
                            </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                            <button
                                class="btn btn_quote my-2 my-sm-0 rounded-pill"
                                type="submit"
                            >
                                GET A QUOTE
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </nav>
    </header>
