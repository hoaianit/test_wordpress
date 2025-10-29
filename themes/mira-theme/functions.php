<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function mira_demo_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', ['search-form','comment-form','comment-list','gallery','caption'] );

    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'mira-demo-theme' ),
    ] );
}
add_action( 'after_setup_theme', 'mira_demo_setup' );

function mira_demo_assets() {
    wp_enqueue_style( 'mira-main', get_template_directory_uri() . '/assets/css/main.css', [], filemtime( get_template_directory() . '/assets/css/main.css' ) );
    wp_enqueue_script( 'mira-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], filemtime( get_template_directory() . '/assets/js/main.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'mira_demo_assets' );
