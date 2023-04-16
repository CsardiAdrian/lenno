<!DOCTYPE html>
<html  <?php language_attributes() ?>>

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v12.0&appId=330801471235394&autoLogAppEvents=1" nonce="7GKFOHKr"></script>
    <!-- HEADER -->
    <header class="header header--main header-sticky">
        <div id="header" class="jumbotron">
            <div class="header-main container">
                <div class="d-flex">
                    <div class="d-lg-none">
                        <span id="mobilNavOpen" class="d-lg-none ">
                            <i></i>
                            <i></i>
                            <i></i>
                        </span>
                    </div>
                    <div class="logo-con">
                    <div class="logo">
                                <?php 
                                if ( get_custom_logo() != '' ) {
                                    echo get_custom_logo();
                                } else {
                                    echo '<h1><a href="' . get_option('siteurl') . '">' . get_bloginfo('name') . '</a></h1>';
                                }
                                ?>
                            </div>
                    </div>
                <div class="d-flex">
                        <div class="d-none d-lg-block main-menu nav--main">
                            <div id="navigation" class="d-none d-lg-block">
                                <nav class="primary-navigation nav navbar navbar-expand-lg justify-content-end">
                                    <!-- nav-->
                                
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary-menu',
                                        ));
                                        ?>
                                        

                                </nav>
                            </div>
                        </div>
                        <div id="mobilNav">
                            <nav class="nav">
                                <!-- nav-->
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'mobile-menu',
                                )); ?>
                            </nav>
                        </div>
                        <div id="top-nav" class="top-navigation"> 
                            <div id="search-toggle" class="search-toggle">
                                <i class="fa-solid fa-magnifying-glass"></i>                          
                            </div>
                            <div id="search-form" class="search-form">
                                <?php aws_get_search_form( true ); ?>  
                            </div>

                            <?php wp_nav_menu(array(
                                'theme_location' => 'top-menu', 
                                'container_class' => 'top-navigation'
                            )); ?> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
