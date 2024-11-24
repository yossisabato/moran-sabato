<?php get_header(); ?>
<main>
    <section>
        <div class="site-logo">
            <img src="<?php echo esc_url('http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png'); ?>" alt="מרכז טיפולי מורן סבתו">
        </div>
        <h1>מרכז טיפולי - מורן סבתו</h1>
        <p>מרכז מהתמחה בטיפול מיני, זוגי, משפחתי, טיפול בטראומה, וטיפול בפגיעות מיניות - פוגעים ונפגעים</p>
    </section>

    <!-- New Section with Image and Description -->
    <section class="intro">
        <div class="intro-content">
            <h2>ברוכים הבאים</h2>
            <p>
                מרכז טיפולי מורן סבטו מתמחה בטיפול במגוון תחומים, כולל טיפול זוגי, משפחתי, וטראומה.
                אנו מציעים שירות מקצועי ויחס אישי שיעזור לכם לשפר את חייכם.
            </p>
        </div>
        <div class="intro-image">
            <img src="http://moransabato.local/wp-content/uploads/2024/11/Moran-scaled.jpg" alt="מרכז טיפולי מורן סבטו">
        </div>
    </section>

    <section class="services">
        <div class="service">
            <h3>טיפול זוגי</h3>
            <p>טיפול זוגי מסייע לשיפור הקשר הזוגי והחיבור בין בני הזוג.</p>
            <a href="<?php echo site_url('/couples-therapy'); ?>">Learn More</a>
        </div>
        <div class="service">
            <h3>טיפול משפחתי</h3>
            <p>טיפול משפחתי מסייע לשיפור הקשר המשפחתי והחיבורים בתוך המשפחה.</p>
            <a href="<?php echo site_url('/family-therapy'); ?>">Learn More</a>
        </div>
        <div class="service">
            <h3>טיפול בטראומה</h3>
            <p>עוזר לאנשים להתמודד עם טראומות ולשפר את איכות חייהם.</p>
            <a href="<?php echo site_url('/trauma-therapy'); ?>">Learn More</a>
        </div>
        <div class="service">
            <h3>טיפול מיני</h3>
            <p>טיפול מיני תומך בזוגות ויחידים במטרה לשפר את חיי המין.</p>
            <a href="<?php echo site_url('/sexual-therapy'); ?>">Learn More</a>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta">
        <h2>צרו קשר עוד היום</h2>
        <p>מתלבטים? צוות המטפלים שלנו כאן בשבילכם. צרו קשר עוד היום ונחזור אליכם בהקדם.</p>
        <a href="<?php echo site_url('/contact'); ?>" class="cta-button">צור קשר</a>
    </section>

</main>
<?php get_footer(); ?>
