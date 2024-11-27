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
    <p>&copy; <?php echo date("Y"); ?> מורן סבתו כל הזכויות שמורות 0528-751769 </p>
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
