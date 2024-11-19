<?php get_header(); ?>
<main>
    <h1><?php the_archive_title(); ?></h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            echo '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
            the_excerpt();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>
