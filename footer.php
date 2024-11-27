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
<?php endif; ?>
