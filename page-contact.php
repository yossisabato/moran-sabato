<?php
/* Template Name: Contact Page */

get_header();
?>
<h1>מורן סבתו</h1>
<h3>0525-8751769</h3>
<h3><a href="mailto:morano20@gmail.com">morano20@gmail.com</a></h3>
<h3>מודיעין | ירושלים</h3>

<div class="container">
    <!-- Page Header -->
    <div class="page-header">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png" alt="Logo" class="logo">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/Moran-scaled.jpg" alt="Moran Sabato" class="image">
    </div>

    <!-- Contact Form -->
    <form action="" method="POST">
        <label for="name">שם (חובה):</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">מספר טלפון (חובה):</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="email">אימייל:</label>
        <input type="email" id="email" name="email">

        <label for="address">כתובת:</label>
        <input type="text" id="address" name="address">

        <label for="clinic">קליניקה נדרשת:</label>
        <select id="clinic" name="clinic">
            <option value="jerusalem">ירושלים</option>
            <option value="modiin">מודיעין</option>
            <option value="modiin">אחר</option>

        </select>

        <label for="subject">נושא הפנייה:</label>
        <input type="text" id="subject" name="subject">

        <label for="message">הודעה:</label>
        <textarea id="message" name="message" rows="4"></textarea>

        <button type="submit" class="submit-button">שלח</button>
    </form>

    <?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_email($_POST['email']);
        $address = sanitize_text_field($_POST['address']);
        $clinic = sanitize_text_field($_POST['clinic']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        $email_message = "שם: $name\nטלפון: $phone\nאימייל: $email\nכתובת: $address\nקליניקה: $clinic\nנושא: $subject\nהודעה: $message";

        // Send email
        wp_mail('morano20@gmail.com', 'New Contact Form Submission', $email_message);

        // Redirect after submission
        echo '<div class="success-message">תודה שפנית למורן, אצור איתך קשר בהקדם</div>';
    }
    ?>
</div>

<?php
get_footer();
?>
