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
 <!--   <img src="<?php echo esc_url('http://moransabato.local/wp-content/uploads/2024/11/moran-logo.png'); ?>" alt="<?php bloginfo('name'); ?>"> -->
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
    <nav class="main-navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_class' => 'main-menu',
    ));
    ?>
</nav>

</header>
