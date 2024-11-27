<?php
/* Template Name: Service Page */
get_header();
?>

<main class="service-page">
    <div class="service-header">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="service-content">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content(); // Pulls the page content from the WordPress editor
            endwhile;
        else :
            echo '<p>No content available.</p>';
        endif;
        ?>
    </div>

    <!-- Contact Section -->
    <div class="contact-section">
        <?php get_template_part('template-parts/contact-form'); ?>
    </div>
    
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
    
    <!-- WhatsApp Icon -->
    <a href="https://wa.me/972528751769" class="whatsapp-icon" target="_blank">
        <img src="http://moransabato.local/wp-content/uploads/whatsapp-icon.png" alt="WhatsApp">
    </a>
    <!-- Call-to-Action Section -->
    <section class="cta">
        <h2>יצירת קשר</h2>
        <p>מתלבטים? צוות המטפלים שלנו כאן בשבילכם. צרו קשר עוד היום ונחזור אליכם בהקדם.</p>
        <a href="<?php echo site_url('/contact'); ?>" class="cta-button">צור קשר</a>
    </section>
</main>

<?php get_footer(); ?>
