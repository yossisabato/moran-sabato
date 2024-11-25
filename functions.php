<?php
function moran_sabato_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Register a navigation menu
    register_nav_menus( array(
        'main-menu' => __( 'Main Menu', 'moran-sabato' ),
    ) );
}
add_action( 'after_setup_theme', 'moran_sabato_setup' );

function moran_sabato_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'moran_sabato_scripts' );

function enqueue_popup_script() {
    wp_enqueue_script('popup-js', get_template_directory_uri() . '/js/popup.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_popup_script');

add_action('init', function() {
    if (isset($_GET['test_email'])) {
        $to = 'your_email@gmail.com'; // Replace with your email
        $subject = 'Test Email';
        $message = 'This is a test email from your WordPress site.';
        $headers = ['Content-Type: text/plain; charset=UTF-8'];

        $sent = wp_mail($to, $subject, $message, $headers);
        if ($sent) {
            echo 'Test email sent successfully.';
        } else {
            echo 'Failed to send test email.';
        }
        die;
    }
});

