<!DOCTYPE html>
<html  <?php language_attributes() ?>>

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="wp-content/themes/lenno/build/css/style.min.css">-->
</head>

<body>
    <!-- HEADER -->
    <header class="header header--main header-sticky">
        <div class="container-lg">
            <div class="d-flex">
                <div class="logo-con col-sm-11 col-md-11 col-lg-2 col-11">
                <div class="logo">
                            <a href="/">
                                <?php 
                                if ( get_custom_logo() != '' ) {
                                    echo get_custom_logo();
                                    //echo '<img src="' . get_theme_mod('logo') . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                                ?>
                            </a>
                        </div>
                </div>

                <div class="col-md-8 col-lg-10 d-none d-lg-block main-menu nav--main">
                    <div id="navigation" class="d-none d-lg-block">
                        <nav class="nav navbar navbar-expand-lg justify-content-end">
                            <!-- nav-->
                           
                                <?php wp_nav_menu(); ?>
                          
                        </nav>
                    </div>
                </div>
                <div id="mobilNav">
                    <nav class="nav">
                        <!-- nav-->
                        <?php wp_nav_menu(); ?>
                    </nav>
                </div>
                <div class="d-lg-none">
                    <span id="mobilNavOpen" class="d-block d-lg-none ">&#9776;</span>
                </div>
            </div>
    </header>
    <!-- HERO -->

        
