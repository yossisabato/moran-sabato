<?php get_header(); ?>
<main>
    <section>
        <h1>מרכז טיפולי - מורן סבתו</h1>
        <p>מרכז מהתמחה בטיפול מיני, זוגי, משפחתי, טיפול בטראומה, וטיפול בפגיעות מיניות - פוגעים ונפגעים</p>
    </section>

    <section class="services">
    <h2>הטיפולים שלנו</h2>
    <div class="service">
        <img src="path-to-icon1.png" alt="Icon for Couples Therapy" class="service-icon">
        <h3>טיפול זוגי</h3>
        <p>טיפול זוגי מסייע לשיפור הקשר הזוגי והחיבור בין בני הזוג.</p>
        <a href="<?php echo site_url('/couples-therapy'); ?>">Learn More</a>
    </div>
    <div class="service">
        <img src="path-to-icon2.png" alt="Icon for Sexual Therapy" class="service-icon">
        <h3>טיפול מיני</h3>
        <p>טיפול מיני תומך בזוגות ויחידים במטרה לשפר את חיי המין.</p>
        <a href="<?php echo site_url('/sexual-therapy'); ?>">Learn More</a>
    </div>
    <div class="service">
        <img src="path-to-icon3.png" alt="Icon for Trauma Therapy" class="service-icon">
        <h3>טיפול בטראומה</h3>
        <p>עוזר לאנשים להתמודד עם טראומות ולשפר את איכות חייהם.</p>
        <a href="<?php echo site_url('/trauma-therapy'); ?>">Learn More</a>
    </div>
</section>

</main>
<?php get_footer(); ?>
