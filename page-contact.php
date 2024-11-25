<?php
get_header();
?>
<h1> 0528-751769 מורן סבתו</h1>
<h3><a href="mailto:morano20@gmail.com">morano20@gmail.com</a></h3>
<h3>מודיעין | ירושלים</h3>
<div class="container">
    <!-- Page Header -->
    <div class="contact-header">
    <div class="image-container">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/Moran-scaled.jpg" alt="Moran Sabato" class="contact-image" onclick="openPopup(this.src)" />
    </div>
    <div class="logo-container">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png" alt="Logo" class="contact-logo" />
    </div>
</div>


    <!-- Contact Form -->
    <form action="" method="POST">
        <label for="name">שם *:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">מספר טלפון *:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="email">אימייל:</label>
        <input type="email" id="email" name="email">

        <label for="address">כתובת:</label>
        <input type="text" id="address" name="address">

        <label for="clinic">קליניקה :</label>
        <select id="clinic" name="clinic">
            <option value="modiin">מודיעין</option>
            <option value="jerusalem">ירושלים</option>
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

<div id="image-popup" class="popup-overlay">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">×</span>
        <img id="popup-img" src="" alt="Popup Image" />
    </div>
</div>


<?php
get_footer();
?>
