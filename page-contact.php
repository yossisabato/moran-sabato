<?php
if (!session_id()) {
    session_start();
}

get_header();
echo 'Session ID: ' . session_id();

// Initialize success and error messages
$success_message = '';
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $address = sanitize_text_field($_POST['address']);
    $clinic = sanitize_text_field($_POST['clinic']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Email details
    $to = 'morano20@gmail.com';
    $email_subject = "פנייה חדשה מהאתר: " . $subject;
    $email_body = "שם: $name\nטלפון: $phone\nEmail: $email\nכתובת: $address\nקליניקה: $clinic\n\nהודעה:\n$message";
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        "From: Moran Sabato <yossi.sabto@gmail.com>"
    ];

    // Attempt to send email
    if (wp_mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['success_message'] = "תודה שפנית למורן! אצור איתך קשר בהקדם.";
        wp_redirect(home_url('/contact/'));
        exit;
    } else {
        $_SESSION['error_message'] = "שליחת הטופס נכשלה. אנא נסה שוב מאוחר יותר, ניתן לשלוח ווטסאפ ל 0528-751769.";
        wp_safe_redirect(home_url('/contact/'));
        exit;
    }
}

// Retrieve session messages
if (!empty($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}

if (!empty($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}
?>
<div class="container">
    <!-- Page Header -->
    <div class="contact-header" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 30px;">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/Moran-scaled.jpg" alt="Moran Sabato" class="contact-image" style="width: 200px; border-radius: 10px;">
        <div class="contact-info" style="text-align: center;">
            <h1 style="margin: 0;">מורן סבתו</h1>
            <p style="margin: 0;">0528-751769</p>
            <p style="margin: 0;"><a href="mailto:morano20@gmail.com">morano20@gmail.com</a></p>
            <p style="margin: 0;">מודיעין | ירושלים</p>
        </div>
        <img src="http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png" alt="Logo" class="contact-logo" style="width: 200px; border-radius: 10px;">
    </div>
    
    <!-- Contact Form -->
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
        <label for="name">שם *:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">מספר טלפון *:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="email">אימייל:</label>
        <input type="email" id="email" name="email">

        <label for="address">כתובת:</label>
        <input type="text" id="address" name="address">

        <label for="clinic">קליניקה:</label>
        <select id="clinic" name="clinic">
            <option value="modiin">מודיעין</option>
            <option value="jerusalem">ירושלים</option>
            <option value="else">אחר</option>
        </select>

        <label for="subject">נושא הפנייה:</label>
        <input type="text" id="subject" name="subject">

        <label for="message">הודעה:</label>
        <textarea id="message" name="message" rows="4"></textarea>

        <button type="submit" class="submit-button">שלח</button>
    </form>
</div>

<!-- Display Messages -->
<?php if (!empty($success_message)) : ?>
    <div class="success-message" style="background: #d4edda; padding: 10px; margin: 10px 0; border: 1px solid #c3e6cb; color: #155724;">
        <?php echo $success_message; ?>
    </div>
<?php endif; ?>

<?php if (!empty($error_message)) : ?>
    <div class="error-message" style="background: #f8d7da; padding: 10px; margin: 10px 0; border: 1px solid #f5c6cb; color: #721c24;">
        <?php echo $error_message; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
