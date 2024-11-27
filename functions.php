<?php
// Theme setup function
function moran_sabato_setup() {
    // Add theme supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register the main navigation menu
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'moran-sabato'),
    ));
}
add_action('after_setup_theme', 'moran_sabato_setup');

// Enqueue styles and scripts
function moran_sabato_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'moran_sabato_scripts');

// Start session globally
add_action('init', function () {
    if (!session_id()) {
        session_start();
    }
});

// Set custom "From" email and name for wp_mail()
function custom_wp_mail_from($original_email_address) {
    return 'yossi.sabto@gmail.com'; // Replace with your SMTP authenticated email
}
add_filter('wp_mail_from', 'custom_wp_mail_from');

function custom_wp_mail_from_name($original_email_from) {
    return 'Moran Sabato website'; // Replace with your desired "From Name"
}
add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');
