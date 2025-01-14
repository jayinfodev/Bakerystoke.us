<?php




/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baapkidu_wp578' );

/** Database username */
define( 'DB_USER', 'baapkidu_wp578' );

/** Database password */
define( 'DB_PASSWORD', 'pS743js6.(' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qhpfasa5oyfph0bxd7jorxr94kjfcvqrocasmqi22kk7ilnzhbya8e18mu2vumah' );
define( 'SECURE_AUTH_KEY',  'ueknyezuwirtilzk7j7hyqyqkj3vjxg6pjkcksnekd9zjh5lhthwmkdelchdbdxq' );
define( 'LOGGED_IN_KEY',    '5ab58guuwkhbehspf7pywvexkd3yqplusraa2okyohdwzsftzqtjoi9ps1ojtslz' );
define( 'NONCE_KEY',        'xya6btxxo8vqwemj8bn8cctipwgmb9gb3syol4nvdezqotcksmvosonqutul0d3q' );
define( 'AUTH_SALT',        'itliccifkjn8htl2a2tsvkgf20inp3uul1gdj96bswavahouffkkgdblhj6opku2' );
define( 'SECURE_AUTH_SALT', 'nflk5nquluaz2aeqrivhzrgjiocwdnfbixzgblnquew8cdwqmyo5r2qp3ulyyeuz' );
define( 'LOGGED_IN_SALT',   'drrn4it9mywhnojngaqt2f3nbpxgfxfbwvp0bhckuki2v7kfaggdebvmx9r4rfxe' );
define( 'NONCE_SALT',       'ph1idoyrltm3r1a8mcexqpifgluio38valgyd2s2m25ipin4sxg3imbqlxxixwb9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpoq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
