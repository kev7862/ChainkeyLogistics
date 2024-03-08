<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dvncxrjq_wp577' );
/** Database username */
define( 'DB_USER', 'dvncxrjq_wp577' );
/** Database password */
define( 'DB_PASSWORD', 'G[1p7S)2eC' );
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
define( 'AUTH_KEY',         'tfzsygqoblfudjmrqnyjvee3dlyiwg8kxdkej2kqdxbtb8oi39pbwhk0zbjm9dnm' );
define( 'SECURE_AUTH_KEY',  '4hx6bs4fz2srnlmpyakuhgczjlg5cmhv3uiupiwbjfglrbvafmoqooh60umrj00j' );
define( 'LOGGED_IN_KEY',    'bvghtduq5dlqqexpx3nzquqga3vztaj9icjya4wczwhhazufwx2tdlqd7tztuj2k' );
define( 'NONCE_KEY',        'pqzpdetpjtvdn6hwgsai4wzfo1puzeicunyxwyrhs8imcvzkconcej3wyj5zfkkm' );
define( 'AUTH_SALT',        '5qtxicd5iokdikhnxevjlfmnqg1ixs5cpuvjpm5fdpchbqrn4yqjcci5knxcmlee' );
define( 'SECURE_AUTH_SALT', 'u97muxbknynu2rrdp0bpwrffrdnfbaqr6ekh98lmqoiepzsgdfuxqrz44j6i1ybz' );
define( 'LOGGED_IN_SALT',   'xefjzmzwjprwcavicccmwpnysklt1wwpmnddpawlleunrbmfqzuzsrtpx1irqsgo' );
define( 'NONCE_SALT',       'dqpuo9pmds6d2jdv3bhn6me0flnmti7zhivcba7tev5vvnnagbsdle4xebm0pdhs' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyu_';
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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