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

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/972528751769" class="whatsapp-icon" target="_blank">
        <img src="http://moransabato.local/wp-content/uploads/whatsapp-icon.png" alt="WhatsApp">
    </a>
</main>

<?php get_footer(); ?>
