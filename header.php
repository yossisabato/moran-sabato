<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="site-logo">
    <img src="<?php echo esc_url('YOUR_IMAGE_URL'); ?>" alt="<?php bloginfo('name'); ?>">
    </div>
    <nav>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => 'main-menu'
        ) );
        ?>
    </nav>
</header>
