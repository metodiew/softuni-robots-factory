<?php

// @TODO: enqueue styles and scripts
// @TODO register nav menu

if ( ! defined( 'ROBOTS_FACTORY_ASSETS_VERSION' ) ) {
    define( 'ROBOTS_FACTORY_ASSETS_VERSION', '0.1' );
}

if ( ! defined( 'ROBOTS_FACTORY_ASSETS_URL' ) ) {
    define( 'ROBOTS_FACTORY_ASSETS_URL', get_template_directory_uri() . '/assets/' );
}

/**
 * Function that enqueue all of our assets
 *
 * @return void
 */
function robots_enqueue_assets() {
    // Define the URL of the theme assets directory

    // Theme Styles
    wp_enqueue_style( 'bootstrap', ROBOTS_FACTORY_ASSETS_URL . '/css/bootstrap.min.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style( 'magnific-popup', ROBOTS_FACTORY_ASSETS_URL . '/css/magnific-popup.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style( 'owl.carousel', ROBOTS_FACTORY_ASSETS_URL . '/css/owl.carousel.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style( 'owl.carousel.theme.min', ROBOTS_FACTORY_ASSETS_URL . '/css/owl.carousel.theme.min.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style( 'ionicons', ROBOTS_FACTORY_ASSETS_URL . '/css/ionicons.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style( 'robots-main-style', ROBOTS_FACTORY_ASSETS_URL . '/css/main.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );

    // Theme Scripts

    wp_enqueue_script( 'bootstrap', ROBOTS_FACTORY_ASSETS_URL . '/js/bootstrap.min.js', array( 'jquery' ), ROBOTS_FACTORY_ASSETS_VERSION, array() );
    wp_enqueue_script( 'jquery.magnific-popup', ROBOTS_FACTORY_ASSETS_URL . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), ROBOTS_FACTORY_ASSETS_VERSION, array() );
    wp_enqueue_script( 'owl.carousel', ROBOTS_FACTORY_ASSETS_URL . '/js/owl.carousel.min.js', array( 'jquery' ), ROBOTS_FACTORY_ASSETS_VERSION, array() );
    wp_enqueue_script( 'robots-scripts', ROBOTS_FACTORY_ASSETS_URL . '/js/script', array( 'jquery' ), ROBOTS_FACTORY_ASSETS_VERSION, array() );
}
add_action( 'wp_enqueue_scripts', 'robots_enqueue_assets' );
