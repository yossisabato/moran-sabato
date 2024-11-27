<?php get_header(); ?>

<div class="service-page-container">
    <!-- Service Title -->
    <h1 class="service-page-title"><?php the_title(); ?></h1>
    
    <!-- Main Content -->
    <div class="service-content-section">
        <?php
        // Display the main content of the service page
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
    
    <!-- Contact Section -->
    <div class="contact-section">
        <?php get_template_part('template-parts/contact-form'); ?>
    </div>

    <!-- Call-to-Action Section -->
    <section class="cta">
        <h2> יצירת קשר  </h2>
        <p>מתלבטים? צוות המטפלים שלנו כאן בשבילכם. צרו קשר עוד היום ונחזור אליכם בהקדם.</p>
        <a href="<?php echo site_url('/contact'); ?>" class="cta-button">צור קשר</a>
    </section>
    
    <!-- WhatsApp Icon -->
    <a href="https://wa.me/972528751769" class="whatsapp-icon" target="_blank">
        <img src="http://example.com/whatsapp-icon.png" alt="WhatsApp">
    </a>
</div>

<?php get_footer(); ?>
