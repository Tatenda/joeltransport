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
                    <li class="col-2 "><a href="tel://+27 12 666 9055">+27 12 666 9055</a></li>
                    <li class="col-3 "><a href="mailto:sales@joeltransport.co.za">sales@joeltransport.co.za</a></li>
                    <li class=" col-2 offset-5">
                        <a href="https://twitter.com/JoelsTransport" target="_blank"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/ptyltd.joeltransport/" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/Joel.Transport1965/" target="_blank"><i
                                class="fa-brands fa-facebook"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navigation">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="https://joeltransport.co.za/wp-content/uploads/2020/07/LOGO-01.png" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <!-- <a class="nav-link active" aria-current="page" href="/">Home</a> -->
                                <a class="navbar-brand" href="/">
                                    <img src="./img/home-icon.svg" alt="logo" />
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/home-moves" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    HOME MOVES
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/home-moves#domestic-moves">Domestic moves</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/home-moves#international-removals">International
                                            removals</a></li>
                                    <li><a class="dropdown-item" href="/home-moves#packing-services">Packing
                                            services</a></li>

                                    <li><a class="dropdown-item" href="/home-moves#packing-material">Packing
                                            material</a></li>
                                    <li><a class="dropdown-item" href="/home-moves#storage">Storage</a></li>
                                    <li><a class="dropdown-item" href="/home-moves#insurance">Insurance</a></li>
                                    <li><a class="dropdown-item specialized-menu-item">SPECIALIZED SERVICES</a></li>
                                    <li><a class="dropdown-item" href="/home-moves#pets">Pets</a></li>
                                    <li><a class="dropdown-item" href="/home-moves#vehicle-transport">Vehicle
                                            transport</a></li>
                                    <li><a class="dropdown-item" href="/home-moves#fine-art">Fine Art</a></li>
                                    <li><a class="dropdown-item" href="/home-moves#dangerous-goods">Dangerous goods</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/quote">
                                            <button class="btn btn-quote" Get a quote</button>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/office-removals" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    OFFICE REMOVALS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/office-removals#office-removalse">Office
                                            removals</a></li>
                                    <li><a class="dropdown-item" href="/office-removals#">Packing services</a></li>
                                    <li><a class="dropdown-item" href="/office-removals#">Packing materials</a></li>
                                    <li><a class="dropdown-item" href="/office-removals#">Document storage</a></li>
                                    <li><a class="dropdown-item" href="/office-removals#">Insurance</a></li>
                                    <li><a class="dropdown-item specialized-menu-item">SPECIALIZED SERVICES</a></li>
                                    <li><a class="dropdown-item" href="/office-removals#">Vehicle transportation</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/office-removals#">Dangerous goods</a></li>
                                    <li><a class="dropdown-item" href="/quote">
                                            <button class="btn btn-quote">Get a quote</button>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/resources" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    RESOURCES
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/resources#">Moving Tips</a></li>
                                    <li><a class="dropdown-item" href="/resources#">Home checklist</a></li>
                                    <li><a class="dropdown-item" href="/resources#">Office checklist</a></li>
                                    <li><a class="dropdown-item" href="/resources#">FAQs</a></li>
                                    <li><a class="dropdown-item specialized-menu-item">Documents</a></li>
                                    <li><a class="dropdown-item" href="/resources#">Home inventory list</a></li>
                                    <li><a class="dropdown-item" href="/resources#">AMOSA certificate</a></li>
                                    <li><a class="dropdown-item" href="/quote">
                                            <button class="btn btn-quote">Get a quote</button>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-quote" href="/quote">Get a quote</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>