<?php

// Enqueue the child theme
function enqueue_parent_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// echo '<pre>';
// print_r( get_template_directory_uri() );
// print_r(get_stylesheet_directory_uri() );
// wp_die();

// Enqueue custom styles
function enqueue_custom_styles() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/custom.css', array(), filemtime( get_stylesheet_directory() . '/custom.css' ), 'all');
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles', 99 );

// Enqueue Google Fonts
function enqueue_google_fonts() {
    wp_enqueue_style(
        'css-google-fonts',
        '//fonts.googleapis.com/css?family=DM+Mono:300,400,500|DM+Sans:300,400,500&display=swap',
        array(),
        null );
    };
add_action( 'wp_enqueue_scripts', 'enqueue_google_fonts' );

// Custom logo
function portfolio_custom_logo_setup() {
    $defaults = array(
        'height'               => 30,
        'width'                => 30,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'portfolio_custom_logo_setup' );

?>