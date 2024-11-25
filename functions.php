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

function handle_contact_form_submission() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $clinic = $_POST['clinic'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Send email
        $to = "morano20@gmail.com";
        $headers = "From: $email";
        $email_subject = "New Contact Form Submission - $subject";
        $email_body = "Name: $name\nPhone: $phone\nEmail: $email\nAddress: $address\nClinic: $clinic\nMessage:\n$message";

        if (mail($to, $email_subject, $email_body, $headers)) {
            return "<div class='success-message'>תודה שפנית למורן, אצור איתך קשר בהקדם</div>";
        } else {
            return "<div class='error-message'>שליחת הטופס נכשלה. אנא נסה שוב מאוחר יותר.</div>";
        }
    }
}
add_shortcode('contact_form_handler', 'handle_contact_form_submission');
