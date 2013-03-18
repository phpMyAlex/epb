<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <body>
        <div id="container">
        <div id="logo">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="140" height="140" alt="Logo">
            </a>
        </div>
        <div id="cart"></div>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
        <div id="left">
            <?php wp_nav_menu( array( 'theme_location' => 'left-menu' ) ); ?>
        </div>
        <div id="middle">