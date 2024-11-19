<?php get_header(); ?>
<main>
    <h1>צור קשר</h1>
    <p>אנא מלאו את הפרטים ונחזור אליכם בהקדם</p>
    <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
        <label for="name">שם פרטי ושם משפחה:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">הודעה:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">שליחה</button>
    </form>
</main>
<?php get_footer(); ?>
