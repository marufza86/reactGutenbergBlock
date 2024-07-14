<?php
function test_theme_theme_setup() {
    // Add support for dynamic title tags
    add_theme_support('title-tag');
    
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'test_theme_theme_setup');

function test_theme_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'test_theme_theme_enqueue_scripts');
?>