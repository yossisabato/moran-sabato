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
    <div class="header-container" style="display: flex; align-items: center; justify-content: space-between; padding: 10px;">
        <!-- Logo -->
        <div class="site-logo" style="flex: 1; text-align: center;">
            <a href="<?php echo home_url(); ?>">
                <img src="http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png" alt="מרכז טיפולי מורן סבתו" style="max-width: 150px; height: auto;">
            </a>
        </div>
        <!-- Picture -->
        <div class="image-item" style="flex: 1; text-align: center;">
            <a href="<?php echo home_url(); ?>">
                <img src="http://moransabato.local/wp-content/uploads/2024/11/Moran-scaled.jpg" alt="מורן סבתו" style="max-width: 150px; height: auto; border-radius: 50%; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            </a>
        </div>
        <!-- Navigation -->
        <nav class="main-navigation" style="flex: 2; text-align: center;">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'main-menu',
            ));
            ?>
        </nav>
    </div>
</header>

