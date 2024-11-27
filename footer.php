<?php if (is_front_page()) : ?>
    <?php include locate_template('footer-home.php'); ?>
<?php else : ?>
    <footer class="site-footer" style="background: #f9f9f9; padding: 10px 0; text-align: center; border-top: 1px solid #e0e0e0;">
    <!-- Contact Details -->
    <div style="font-size: 12px; color: #666; line-height: 1.6;">
        <p style="margin: 5px 0;">
            © 2024 מורן סבתו - כל הזכויות שמורות
        </p>
        <p style="margin: 5px 0;">
            טלפון: <a href="tel:0528751769" style="color: #666; text-decoration: none;">0528-751769</a>
        </p>
        <p style="margin: 5px 0;">
            <a href="mailto:morano20@gmail.com" style="color: #666; text-decoration: none;">morano20@gmail.com</a>
        </p>
    </div>

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/972528751769" class="whatsapp-icon" target="_blank" style="display: inline-block; margin-top: 5px;">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/whatsapp-icon.jpeg" alt="WhatsApp" style="width: 20px; height: 20px; vertical-align: middle;">
    </a>
</footer>

    <!-- Default footer content -->
<!--    <footer>
    <section class="contact-section">
        <h2>צור קשר</h2>
        <p>מלאו את הטופס וניצור קשר בהקדם.</p>
        <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
            <label for="name">שם:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">אימייל:</label>
            <input type="email" id="email" name="email">

            <label for="message">הודעה:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">שלח</button>
        </form>
    </section>
    <section class="site-footer" style="background: #f5f5f5; padding: 10px; text-align: center; border-top: 1px solid #e0e0e0;">
    <div class="footer-content" style="font-size: 14px; color: #666;">
        <p>© 2024 מורן סבתו - כל הזכויות שמורות | טלפון: <a href="tel:0528751769" style="color: #666; text-decoration: none;">0528-751769</a></p>
        <a href="https://wa.me/+972528751769?text=שלום,%20אשמח%20שתצרי%20איתי%20קשר" class="whatsapp-floating-button" target="_blank" rel="noopener">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/whatsapp-icon.jpeg" alt="WhatsApp Chat">
    </a>
    </div>
</section>

</footer>

<footer class="site-footer" style="background: #f5f5f5; padding: 20px; text-align: center; border-top: 1px solid #e0e0e0;">
    <!-- Footer Contact Form -->
    <div class="footer-contact-form" style="max-width: 600px; margin: 0 auto; padding-bottom: 20px;">
        <h2 style="font-size: 18px; margin-bottom: 15px; color: #333;">צור קשר</h2>
        <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
            <div style="margin-bottom: 10px;">
                <input type="text" name="name" placeholder="שם *" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 10px;">
                <input type="email" name="email" placeholder="אימייל" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 10px;">
                <textarea name="message" placeholder="הודעה" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
            </div>
            <button type="submit" style="background-color: #D4A59A; color: white; padding: 10px 20px; border: none; border-radius: 5px;">שלח</button>
        </form>
    </div>

    <!-- Footer Details -->
    <div class="footer-content" style="font-size: 14px; color: #666;">
        <p>© 2024 מורן סבתו - כל הזכויות שמורות | טלפון: <a href="tel:0528751769" style="color: #666; text-decoration: none;">0528-751769</a></p>
        <a href="https://wa.me/+972528751769?text=שלום,%20אשמח%20שתצרי%20איתי%20קשר" class="whatsapp-icon" target="_blank" style="display: inline-block; margin-top: 5px;">
            <img src="http://moransabato.local/wp-content/uploads/2024/11/whatsapp-icon.jpeg" alt="וואטסאפ" style="width: 25px; height: 25px; vertical-align: middle;">
        </a>
    </div>
</footer>

-->

<?php endif; ?>

<?php wp_footer(); ?>
<body>
    <!-- Add WhatsApp button here -->
    <a href="https://wa.me/+972528751769?text=שלום,%20אשמח%20שתצרי%20איתי%20קשר" class="whatsapp-floating-button" target="_blank" rel="noopener">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/whatsapp-icon.jpeg" alt="WhatsApp Chat">
    </a>
</body>
</html>
