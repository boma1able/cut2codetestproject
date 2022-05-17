<?php
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
define( 'DB_NAME', 'cut2codetestproject' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@>;3j q2@7{NQG}gWv;(X)T-23_ucwxaXL_N%cm$T!4WRq]kq.8S) 0/2R2HJ#eq' );
define( 'SECURE_AUTH_KEY',  '&a@,4T[weH2PQZEon!R?Rue5&KxRMEEFh<mrFRrK:%Xp3(dxhMu{<A1j5#)B$x$i' );
define( 'LOGGED_IN_KEY',    '-+xEvV6VxIn`_1-ib^Hj]g5R=8RjfSj=r{4ex4Sx73wITa+!VU49+Z!=OPyD-u(,' );
define( 'NONCE_KEY',        '3sGg[T3h3</<hmra&d&aq%[)z!xg+=B?`O0Yh!*tegWO7`HRr7/-ks8&i5t~Z@vd' );
define( 'AUTH_SALT',        'wz)KVUT,g4^bkdrjI|}FF%_Y+xcM&>QPKdg0@]s$f0AJ3HymZatg[T4UzV.uv(n.' );
define( 'SECURE_AUTH_SALT', '7Q-=l:%*knzeK<nnxAtL7~06(V{%THHk5>%1fQvue2xVj$fEIKU<[jsD<];c05E&' );
define( 'LOGGED_IN_SALT',   '.6>tc1TIYg6ynaT;En111x/r/q{] g4Q^hMrH-=OJ;U|r5<9#WCSf=XNf$[cH9B@' );
define( 'NONCE_SALT',       't:ywo5MIaKKSht~ZZlU-}iEpID/VB>,!9/@&Ut{irT-K!t}>ycAa+W|=ff3EYi.0' );

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
