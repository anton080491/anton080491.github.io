<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(‘name’); ?>|<?php bloginfo(‘description’); ?></title>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url');?>/assets/icons/favicon/favicon/favicon.ico" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php 
    wp_head();
    ?>
</head>
<body>
    <div class="preload-wrapper">
        <div class="preload-container">
            <div class="preload-item"></div>
            <div class="preload-item"></div>
            <div class="preload-item"></div>
            <div class="preload-item"></div>
            <div class="preload-item"></div>
        </div>
    </div>
    <a href="#up" class="pageup">
        <img src="<?php echo bloginfo('template_url');?>/assets/icons/arrow-alt-circle-up-solid.svg" alt="arrowup">
    </a>
    <header class="header" id='up'>
        <div class="container">
            <div class="row align-items-center justify-content-between header">
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-6">
                    <?php
                        wp_nav_menu( [
                            'menu'            => 'Menu header', 
                            'container'       => 'ul'
                        ] );
                    ?>
                    <!-- <ul>
                        <li><a href="#">Sponsors</a>
                            <ul>
                                <li ><a href="#">General Sponsor</a></li>
                                <li ><a href="#">Platinum Sponsor</a></li>
                                <li ><a href="#">Gold Sponsor</a></li>
                                <li ><a href="#">High-Tech Sponsor</a></li>
                                <li ><a href="#">Silver Night Sponsor</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Exhibitors</a>
                            <ul>
                                <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                                <li ><a href="#">Another name of the conference</a></li>
                                <li ><a href="#">Another name of the conference 2016</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Speakers</a>
                            <ul>
                                <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                                <li ><a href="#">Another name of the conference</a></li>
                                <li ><a href="#">Another name of the conference 2016</a></li>
                            </ul></li>
                        <li><a href="#">Media</a></li>
                    </ul> -->
                </div>
                <div href="#" class="col-3 menu-gamburger">
                    <span></span>
                </div>
                <div class="menu-adaptiv">
                <?php
                    wp_nav_menu( [
                        'menu'            => 'adaptiv-header-menu', 
                        'container'       => 'ul'
                    ] );
                ?>
                    <!-- <ul>
                        <li><a href="#">Sponsors</a>
                            <ul>
                                <li ><a href="#">General Sponsor</a></li>
                                <li ><a href="#">Platinum Sponsor</a></li>
                                <li ><a href="#">Gold Sponsor</a></li>
                                <li ><a href="#">High-Tech Sponsor</a></li>
                                <li ><a href="#">Silver Night Sponsor</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Exhibitors</a>
                            <ul>
                                <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                                <li ><a href="#">Another name of the conference</a></li>
                                <li ><a href="#">Another name of the conference 2016</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Speakers</a>
                            <ul>
                                <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                                <li ><a href="#">Another name of the conference</a></li>
                                <li ><a href="#">Another name of the conference 2016</a></li>
                            </ul></li>
                        <li><a href="#">Media</a></li>
                    </ul> -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
                    <button class="button">
                        TOP FORUM CLUB 
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="subheader">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-8 col-7 subheader-dsk">
                    <div class="logo" href="<?php echo get_home_url();?>">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="icons_header">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/icons_header/icon_cup.png" alt="icon_cup">
                        <div><a href="http://forum/activities/">UPCOMING EVENTS</a></div>
                    </div>
                    <div class="icons_header">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/icons_header/icon_flag.png" alt="icon_flag">
                        <div><a href="http://forum/contacts/">CONTACTS</a></div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
                    <div class="button button_subheader">
                        <a href="http://forum/registration/">REGISTER NOW</a>  
                    </div>
                </div>
            </div>
        </div>
    </div>