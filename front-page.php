<?php get_header(); ?>
<section class="intro">
    <div class="intro-content" style="text-align: center; padding: 20px; background-color: #FAF3E0; border-radius: 10px; margin: 20px auto; max-width: 800px;">
        <h1 style="margin-bottom: 20px;">מרכז טיפולי - מורן סבתו</h1>
        <p style="font-size: 1.2em; line-height: 1.8;">
            מורן סבתו, מטפלת מינית, זוגית ומשפחתית מוסמכת בעלת תארים מהאוניברסיטה העברית, בר אילן, ומכון רותם.
            טיפולים במגוון נושאים, טיפול מיני, זוגי, משפחתי, טיפול בטראומה, וטיפול בפגיעות מיניות (פוגעים ונפגעים).
            הטיפולים בקליניקות פרטיות במודיעין ובירושלים.
            שירות מקצועי ויחס אישי שיעזור לכם לשפר את חייכם.
        </p>
    </div>
</section>

<main>
<!--    <section class="header-section">
    <div class="images-container">
        <div class="image-item">
            <img src="http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png" alt="מרכז טיפולי מורן סבתו">
        </div>
        <div class="image-item">
            <img src="http://moransabato.local/wp-content/uploads/2024/11/Moran-scaled.jpg" alt="מורן סבתו">
        </div>
    </div>
</section> -->

<!-- Text Section --
<section class="text-section">
    <h1>מרכז טיפולי - מורן סבתו</h1>
    <p>
        מורן סבתו, מטפלת מינית, זוגית ומשפחתית מוסמכת בעלת תארים מהאוניברסיטה העברית, בר אילן, ומכון רותם.
        טיפולים במגוון נושאים, טיפול מיני, זוגי, משפחתי, טיפול בטראומה, וטיפול בפגיעות מיניות (פוגעים ונפגעים).
        הטיפולים בקליניקות פרטיות במודיעין ובירושלים.
        שירות מקצועי ויחס אישי שיעזור לכם לשפר את חייכם.
    </p>
</section>
    -->
<section class="service-section">
    <img src="http://moransabato.local/wp-content/uploads/2024/11/couple-bg-1-1.jpg" alt="Service Image" class="service-image">
    <div class="service-content">
        <h2 class="service-title">טיפול זוגי</h2>
        <p class="service-description">טיפול זוגי מסייע לשיפור הקשר הזוגי והחיבור בין בני הזוג.</p>
        <a href="<?php echo site_url('/service/couples-therapy'); ?>" class="read-more-button">קרא עוד</a>
    </div>
</section>
    
    <section class="service-section">
    <img src="http://moransabato.local/wp-content/uploads/2024/11/lisa-yee-therapy-core-services-intimate-connection-building-icon.png" alt="Service Image" class="service-image">
    <div class="service-content">
        <h2 class="service-title">טיפול מיני</h2>
        <p class="service-description">טיפול מיני בזוגות ויחידים במטרה לשפר את חיי המין.</p>
        <a href="<?php echo site_url('/service/sexual-therapy'); ?>" class="read-more-button">קרא עוד</a>
    </div>
</section>
    <section class="service-section">
    <img src="http://moransabato.local/wp-content/uploads/2024/11/trauma.jpg" alt="Service Image" class="service-image">
    <div class="service-content">
        <h2 class="service-title">טיפול בטראומה</h2>
        <p class="service-description">טיפול בטראומה על מנת לעזור בהתמודדיות עם טראומות ולשיפור איכות החיים</p>
        <a href="<?php echo site_url('/service/trauma-therapy'); ?>" class="read-more-button">קרא עוד</a>
    </div>
</section>
    <section class="service-section">
    <img src="http://moransabato.local/wp-content/uploads/2024/11/png-clipart-genealogy-family-constellations-family-therapy-psychogenealogie-family-people-cartoon-thumbnail.png" alt="Service Image" class="service-image">
    <div class="service-content">
        <h2 class="service-title">טיפול משפחתי</h2>
        <p class="service-description">טיפול משפחתי מסייע לשיפור הקשר המשפחתי והחיבורים בתוך המשפחה.</p>
        <a href="<?php echo site_url('/service/family-therapy'); ?>" class="read-more-button">קרא עוד</a>
    </div>
</section>
    <!-- Call-to-Action Section -->
    <section class="cta">
        <h2>יצירת קשר</h2>
        <p>מתלבטים? צוות המטפלים שלנו כאן בשבילכם. צרו קשר עוד היום ונחזור אליכם בהקדם.</p>
        <a href="<?php echo site_url('/contact'); ?>" class="cta-button">צור קשר</a>
    </section>

</main>
<!-- <?php get_footer_front(); ?> -->
<?php include locate_template('footer-home.php'); ?>
