<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&_^rz1.##P)8B>=S{suQ7r6pdabOzJ*FRF@]L^7k]Js)4N8ZpzI>J4%byc:!gKpZ' );
define( 'SECURE_AUTH_KEY',  'b*Y=Ktoq.~_B`ESWn:< &DI[ DP)sm,GIavuHQphlW|,/(ODte8e`qLCkNKQAyW}' );
define( 'LOGGED_IN_KEY',    'aT3X{oi?iGF~C*8=[LD,6`a:ZZrYW8>nh1x*~WK5-v2^@`XLLY7z-X-)XHE+gXs+' );
define( 'NONCE_KEY',        'uEZ#VLNv:-usD>0*e8jM*/*5fF!t4:97.xH]Ue)F)w=(h7e)zQ|)5lqXs~UI:W>e' );
define( 'AUTH_SALT',        '|j{jLL,4RM{18j]c{>1l/9x3<T(aKa.^Y({ts;I}p,Ii]pY=|nv@ReFvF,xIpN9t' );
define( 'SECURE_AUTH_SALT', 'B4<`Kg/JI%Mpg}&Z3Hiuf:`NrBgU3E3w52jCj(n6V]qq$.?k4kXhcHTU85MZllh;' );
define( 'LOGGED_IN_SALT',   'U&$<TkQIK~Bty^&3nW^k+4Y`xr<I%{I1m.%xrrM~y^Mv8]t-J2]JkoiPSGW@Dh:B' );
define( 'NONCE_SALT',       ']rjj-cvvN#6?+4xvTW4h$HI5S>#Kja*Z::mYfWGzk*wI5ky0@4):,kuu}QGlv%j)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
