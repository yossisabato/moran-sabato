<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- <header>
    <div class="site-logo"> -->
 <!--   <img src="<?php echo esc_url('http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png'); ?>" alt="<?php bloginfo('name'); ?>"> --
    </div>

</header>
-->
<header>
    <div class="site-logo">
        <a href="<?php echo home_url(); ?>">
            <img src="http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png" alt="מרכז טיפולי מורן סבתו" />
        </a>
    </div>
    <div class="image-item">
        <a href="<?php echo home_url(); ?>">
            <img src="http://moransabato.local/wp-content/uploads/2024/11/Moran-scaled.jpg" alt="מורן סבתו">
        </a>
        </div>
    <nav class="main-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_class' => 'main-menu',
        ));
        ?>
    </nav>
</header>
