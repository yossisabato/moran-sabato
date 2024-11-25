<?php
 // Start session to retrieve messages
if (!session_id()) {
    session_start();
}
get_header();

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $address = sanitize_text_field($_POST['address']);
    $clinic = sanitize_text_field($_POST['clinic']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = 'morano20@gmail.com';
    $email_subject = "פנייה חדשה מהאתר: " . $subject;
    $email_body = "שם: $name\n";
    $email_body .= "טלפון: $phone\n";
    $email_body .= "Email: $email\n";
    $email_body .= "כתובת: $address\n";
    $email_body .= "קליניקה מועדפת: $clinic\n";
    $email_body .= "הודעה:\n$message\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        "מאת: $name <$email>"
    ];

    if (wp_mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['success_message'] = "תודה שפנית למורן! אצור איתך קשר בהקדם.";
            header("Location: " . site_url('/')); // Redirect to the home page
          exit();
    } else {
        $_SESSION['error_message'] = "שליחת הטופס נכשלה. אנא נסה שוב מאוחר יותר, ניתן לשלוח ווטסאפ ל 0528-751769.";
    }
  // Redirect back to the same page to show messages and reset form
    wp_safe_redirect(home_url('/'));
    exit;
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

    <!-- Display Success or Error Messages -->
    <?php if (!empty($_SESSION['success_message'])) : ?>
        <div class="success-message"><?php echo $_SESSION['success_message']; ?></div>
        <?php unset($_SESSION['success_message']); // Clear the message ?>
    <?php endif; ?>

    <?php if (!empty($_SESSION['error_message'])) : ?>
        <div class="error-message"><?php echo $_SESSION['error_message']; ?></div>
        <?php unset($_SESSION['error_message']); // Clear the message ?>
    <?php endif; ?>

    <!-- Contact Form -->
    <form action="" method="POST" style="background-color: #FDF6E3; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <label for="name">שם *:</label>
        <input type="text" id="name" name="name" required style="width: 100%; margin-bottom: 10px; padding: 10px; border-radius: 5px;">

        <label for="phone">מספר טלפון *:</label>
        <input type="tel" id="phone" name="phone" required style="width: 100%; margin-bottom: 10px; padding: 10px; border-radius: 5px;">

        <label for="email">אימייל:</label>
        <input type="email" id="email" name="email" style="width: 100%; margin-bottom: 10px; padding: 10px; border-radius: 5px;">

        <label for="address">כתובת:</label>
        <input type="text" id="address" name="address" style="width: 100%; margin-bottom: 10px; padding: 10px; border-radius: 5px;">

        <label for="clinic">קליניקה :</label>
        <select id="clinic" name="clinic" style="width: 100%; margin-bottom: 10px; padding: 10px; border-radius: 5px;">
            <option value="modiin">מודיעין</option>
            <option value="jerusalem">ירושלים</option>
            <option value="else">אחר</option>
        </select>

        <label for="subject">נושא הפנייה:</label>
        <input type="text" id="subject" name="subject" style="width: 100%; margin-bottom: 10px; padding: 10px; border-radius: 5px;">

        <label for="message">הודעה:</label>
        <textarea id="message" name="message" rows="4" style="width: 100%; margin-bottom: 10px; padding: 10px; border-radius: 5px;"></textarea>

        <button type="submit" style="background-color: #D4A59A; color: white; padding: 10px 20px; border: none; border-radius: 5px;">שלח</button>
    </form>
</div>

<!-- Optional: Remove this if you don't want alerts 
<script>
document.addEventListener("DOMContentLoaded", function() {
    const successMessage = "<?php echo esc_js($success_message); ?>";
    const errorMessage = "<?php echo esc_js($error_message); ?>";

    if (successMessage) {
        alert(successMessage);
    }

    if (errorMessage) {
        alert(errorMessage);
    }
});
</script>
-->
<?php get_footer(); ?>
