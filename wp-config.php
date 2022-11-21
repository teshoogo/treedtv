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
define( 'DB_NAME', 'treedtv' );

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
define( 'AUTH_KEY',         '<rP*i0XPqq_jE=Y1td~xS[f9Rb4Hc[FgEle],eAZ+|9D>a}k2L5oGv^NXid<_C<B' );
define( 'SECURE_AUTH_KEY',  'bKhX*K<`|wN>1dy7-NGF5FX`O*!LX48XzGs,K7elLBDf*3[8D]i-!Quy>rL?@!bn' );
define( 'LOGGED_IN_KEY',    '[}t?+UL3vft<iZE2HxMy;?~mIfB.hL]M 1|n;CM}!Zp*n?s,Lj8O+*d2`z.YRudh' );
define( 'NONCE_KEY',        'yqI70k4/+FA}WPY^pkTu,,/*9.49uVUr%rqOp$B*pmF<A7t7o#[)thFkaWb5Y |7' );
define( 'AUTH_SALT',        'OdJV$aWuS@+S/wZv-zmo`Yj ^NZ&~>+p^=:CH[R5|5VQ3=.;il8X/x}o$!xSJ3%t' );
define( 'SECURE_AUTH_SALT', 'g;[_;S2+WxD)f9}FzO/(O=6OY]_#|#gjYp&iT)z;wu#@|JLHP7f@QkChE2MVj+(M' );
define( 'LOGGED_IN_SALT',   '?(rzq2<d=[?`+M5W4k|m98YJ2*zFhP0Yom=D|nb3xm#7Igp%m4Q--tMeiodM{Zy5' );
define( 'NONCE_SALT',       '4&`xrQ|{w;7tg7=Zej9P}u,epe_r3_SRAg]dk5lVYj&($71Z7kwEhfPZ=o{_n1iY' );

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
