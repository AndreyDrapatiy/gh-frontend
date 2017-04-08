<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div id="page" class="site">


        <header id="masthead" class="site-header" role="banner">
            <div class="container">

            <div class="site-branding col-md-2">
                <h1><a href="#"><img class="img-responsive" src="<?php echo get_theme_mod('header-logo') ?>"> </a></h1>
            </div><!-- .site-branding -->
            <div class="col-md-10 ">
                <nav role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->

                    <?php
                    wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>

                </nav>
            </div>
    </div>
        </header><!-- #masthead -->


