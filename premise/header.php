<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Premise
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premise-icon.png" />
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>PremiseHQ</title>    
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header id="masthead" class="site-header" role="banner">

                <?php get_template_part('template-parts/header/site', 'branding'); ?>

            </header><!-- #masthead -->

            <?php
            /*
             * If a regular post or page, and not the front page, show the featured image.
             * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
             */
            if (( is_single() || ( is_page() && !Premise_is_frontpage() ) ) && has_post_thumbnail(get_queried_object_id())) :
                echo '<div class="single-featured-image-header">';
                echo get_the_post_thumbnail(get_queried_object_id(), 'Premise-featured-image');
                echo '</div><!-- .single-featured-image-header -->';
            endif;
            ?>

            <div class="site-content-contain">
                <div id="content" class="site-content">
