<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="header-container" style="display: flex; align-items: center; justify-content: space-between; padding: 10px 20px;">
        <!-- Logo Section -->
        <div class="site-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png" alt="מרכז טיפולי מורן סבתו" style="max-height: 100px;">
            </a>
        </div>

        <!-- Profile Image Section -->
        <div class="profile-image">
            <img src="http://moransabato.local/wp-content/uploads/2024/11/Moran-scaled.jpg" alt="מורן סבתו" style="max-height: 100px; border-radius: 50%;">
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="main-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_class' => 'main-menu',
            'container' => false,
        ));
        ?>
    </nav>
</header>


