<?php get_header(); ?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="service-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; else : ?>
        <p>No content found for this service.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
