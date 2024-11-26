<?php
// ** MySQL settings ** //
define( 'DB_NAME', 'your_database_name' ); // The name of the database
define( 'DB_USER', 'your_database_username' ); // Your database username
define( 'DB_PASSWORD', 'your_database_password' ); // Your database password
define( 'DB_HOST', 'localhost' ); // Usually 'localhost', unless provided otherwise by your host
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Unique Keys and Salts ** //
// Replace these with unique phrases generated from https://api.wordpress.org/secret-key/1.1/salt/
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ** Database Table Prefix ** //
$table_prefix = 'wp_'; // Change this if you want to use a different prefix for your database tables.

// ** Debugging Mode ** //
define( 'WP_DEBUG', true ); // Set to true for development environments
define( 'WP_DEBUG_LOG', true ); // Log errors to /wp-content/debug.log
define( 'WP_DEBUG_DISPLAY', false ); // Avoid displaying errors on the frontend

// ** Enable Sessions for Form Handling ** //
if ( ! defined( 'WP_SESSION_COOKIE' ) ) {
    define( 'WP_SESSION_COOKIE', '_wp_session' );
}

// ** Absolute Path ** //
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
