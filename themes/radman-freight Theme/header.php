<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?= get_bloginfo('name'); ?>">
    <meta name="description" content="<?= get_bloginfo('description'); ?>">
    <meta name="author" content="<?= get_bloginfo('author'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="<?= get_field('favicon', 'option')['url']; ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Navbar STart -->
<header class="position-fixed top-0 z-5 start-0 end-0">
    <nav class="navbar navbar-expand-lg">
        <div class="container mx-2 mx-sm-auto px-lg-3 bg-white rounded overflow-hidden">
            <a class="navbar-brand text-primary pt-2 animate__animated animate__slideInLeft"
               href="/">
                <img height="50" src="<?= get_field('logo_header', 'option')['url']; ?>"
                     alt="<?= get_field('logo_header', 'option')['title']; ?>">
                <span class="d-none d-lg-inline pe-3"> <?= get_field('header_name', 'option'); ?></span>
            </a>
            <button class="navbar-toggler fs-1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse animate__animated animate__fadeInLeft"
                 id="navbarSupportedContent">
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations['headerMenuLocation']);
                if ($menu) :
                    wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation',
                        'menu_class' => 'navbar-nav mx-auto my-4 my-lg-2 all-dark gap-4',
                        'container' => false,
                        'menu_id' => 'navbarTogglerMenu',
                        'item_class' => 'nav-item',
                        'link_class' => 'lazy text-decoration-none',
                        'depth' => 1,
                    ));
                endif;
                ?>
<!--                <button class="btn fs-6 px-3 py-1 btn-primary" type="submit">پیگیری سفارش</button>-->
            </div>
        </div>
    </nav>
</header>
    <a href="#" rel="nofollow"
       class="btn backTo_Top position-fixed bg-primary text-white rounded-circle pt-1 shadow pb-2 px-2">
        <i class="bi bi-arrow-up"></i>
    </a>
<main class="overflow-hidden">



