    <?php
get_header();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_email($_POST['email']);
        $address = sanitize_text_field($_POST['address']);
        $clinic = sanitize_text_field($_POST['clinic']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
    
        $to = 'morano20@gmail.com'; // Your target email
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
            echo '<p class="success-message">תודה שפנית למורן! אצור איתך קשר בהקדם.</p>';
        } else {
            echo '<p class="error-message"> שליחת הטופס נכשלה. אנא נסה שוב מאוחר יותר, ניתן לשלוח ווטסאפ ל 0528-751769.</p>';
        }
    }
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
            <option value="Else">אחר</option>
        </select>

        <label for="subject">נושא הפנייה:</label>
        <input type="text" id="subject" name="subject">

        <label for="message">הודעה:</label>
        <textarea id="message" name="message" rows="4"></textarea>

        <button type="submit" class="submit-button">שלח</button>
    </form>

</div>   
<div id="image-popup" class="popup-overlay">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">×</span>
        <img id="popup-img" src="" alt="Popup Image" />
    </div>
</div>

<?php if (!empty($success_message)) : ?>
    <div class="success-message"><?php echo $success_message; ?></div>
<?php endif; ?>

<?php if (!empty($error_message)) : ?>
    <div class="error-message"><?php echo $error_message; ?></div>
<?php endif; ?>


<?php
get_footer();
?>
