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

// Register Sidebar
add_action('widgets_init', function() {
    register_sidebar(['before_widget' => '<div class="card">', 'after_widget' => '</div>']);
});

add_action('wp_enqueue_scripts', function() {
    wp_register_style('font-droid-arabic-kufi', 'http://fonts.googleapis.com/earlyaccess/droidarabickufi.css');
    wp_register_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js');
    wp_register_script('main-script', get_template_directory_uri() . '/assets/js/vendor.js', ['modernizr'], false, true);

    wp_enqueue_style('font-droid-arabic-kufi');
    wp_enqueue_style('main-style');
    wp_enqueue_script('main-script');
});