<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bikecraft' );

/** Database username */
define( 'DB_USER', 'bento' );

/** Database password */
define( 'DB_PASSWORD', 'bento' );

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
define( 'AUTH_KEY',         '#lf`Y!eQ$?V?uz6]IA5lrX~Qh Cqk4|>$QlkkZ=`r1Bd!~<D2$s7VDSGWRzH-*XR' );
define( 'SECURE_AUTH_KEY',  'R*NH3y?w5lB}h5%b0pkH.&AS<Skb,}SeVvVbKc^MdK #UjqKr}Gxff<w*+YcAE[P' );
define( 'LOGGED_IN_KEY',    '#Mo,ACXbhc?#i!DWY2j-f`o3{*vX p$kEO.E8FGbtbQHSa?c{:i+X`Vi3Y> j_@W' );
define( 'NONCE_KEY',        'N 7eG0`GG4TPV&vy4;5@D8[0qz-<&IvU,n0H^q%d`@s5>`K<()G9*-qh4r9&_WpM' );
define( 'AUTH_SALT',        'D@!_(TrDrsOmnRH)&QRlbp!X60qV#&qId-nBGwjiO[JywN0 5WnVsffr^<nP_Z/:' );
define( 'SECURE_AUTH_SALT', '{6S6,#DVy>^zUQna8fD_!8kB/_1[8>&o`&c5=B2m^ahzjbA.7>vm?y>zK BUs0S>' );
define( 'LOGGED_IN_SALT',   '7RQe2@iViT0Sy/OO!Deo61]WZh-Y;AqMCxlWpwK0GgTdNJHXP*kj1u4cXPh@@1y ' );
define( 'NONCE_SALT',       'M<@wNhxLMkcdwE-14vnwpn^dhoNNI5Tk/42g[Hv~koN;zc^Q[vtc:+6_EQ!z7r=s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

define('FS_METHOD','direct');


