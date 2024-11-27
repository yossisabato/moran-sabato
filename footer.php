<?php if (is_front_page()) : ?>
    <?php include locate_template('footer-home.php'); ?>
<?php else : ?>
    <!-- Default footer content -->
    <<footer>
    <!-- Contact Section -->
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
        <a href="https://wa.me/972528751769" class="whatsapp-icon" target="_blank" style="display: inline-block; margin-top: 5px;">
            <img src="http://example.com/whatsapp-icon.png" alt="וואטסאפ" style="width: 25px; height: 25px; vertical-align: middle;">
        </a>
    </div>
</section>

</footer>
<?php endif; ?>

<?php wp_footer(); ?>
<body>
    <!-- Add WhatsApp button here -->
    <a href="https://wa.me/+972528751769?text=שלום,%20אשמח%20שתצרי%20איתי%20קשר" class="whatsapp-floating-button" target="_blank" rel="noopener">
        <img src="http://moransabato.local/wp-content/uploads/2024/11/whatsapp-icon.jpeg" alt="WhatsApp Chat">
    </a>
</body>
</html>
