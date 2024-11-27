<?php if (is_front_page()) : ?>
    <?php include locate_template('footer-home.php'); ?>
<?php else : ?>
    <footer class="site-footer" style="background: #f9f9f9; padding: 30px 0; text-align: center; border-top: 1px solid #ddd; font-family: Arial, sans-serif; font-size: 14px; color: #555;">
    <!-- Footer Contact Form -->
    <div class="footer-contact-form" style="max-width: 600px; margin: 0 auto 20px; text-align: left; padding: 20px; background: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <h2 style="font-size: 20px; margin-bottom: 15px; color: #444;">צור קשר</h2>
        <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
            <div style="margin-bottom: 10px;">
                <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">שם *</label>
                <input type="text" id="name" name="name" placeholder="שם" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">אימייל</label>
                <input type="email" id="email" name="email" placeholder="אימייל" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="message" style="display: block; margin-bottom: 5px; font-weight: bold;">הודעה</label>
                <textarea id="message" name="message" placeholder="הודעה" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;"></textarea>
            </div>
            <button type="submit" style="background-color: #D4A59A; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; font-weight: bold; cursor: pointer;">שלח</button>
        </form>
    </div>

    <!-- Footer Details -->
    <div class="footer-content" style="margin-top: 20px; font-size: 12px; color: #666; line-height: 1.8;">
        <p style="margin: 5px 0;">© 2024 מורן סבתו - כל הזכויות שמורות</p>
        <p style="margin: 5px 0;">טלפון: <a href="tel:0528751769" style="color: #555; text-decoration: none;">0528-751769</a></p>
        <p style="margin: 5px 0;"><a href="mailto:morano20@gmail.com" style="color: #555; text-decoration: none;">morano20@gmail.com</a></p>
        <a href="https://wa.me/972528751769" class="whatsapp-icon" target="_blank" style="display: inline-block; margin-top: 10px;">
            <img src="http://moransabato.local/wp-content/uploads/whatsapp-icon.png" alt="וואטסאפ" style="width: 25px; height: 25px; vertical-align: middle;">
        </a>
    </div>
</footer>

<?php endif; ?>
