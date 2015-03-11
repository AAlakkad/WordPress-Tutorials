<?php
// Add theme thumbnail support, allowing each post to have thumbnail
add_theme_support('post-thumbnails');

// Enqueue custom style
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('custom-pagination', get_template_directory_uri() . '/custom.css');
});

// Register Navigation menu
add_action('init', function() {
    register_nav_menu('our-custom-menu', 'القائمة الرئيسية');
});

add_action('widgets_init', function() {
    register_sidebar();
});
