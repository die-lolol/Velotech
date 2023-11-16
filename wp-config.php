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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'velotech_db' );

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
define( 'AUTH_KEY',         'z {Ji/dc<nseIM:3p59%&|m}9Wdxm@#?X $gzSI$>lg|>gtUh%%2p8s6wAi`te~V' );
define( 'SECURE_AUTH_KEY',  'ys;_bx%bNfEL5A?+kQNIXX@x`T[>ck<xNBq;@.F@b@S/7A|aQ2 G}aV>PA/Ub}@q' );
define( 'LOGGED_IN_KEY',    'WCW4hIa> d2z#l/uu`io545aP(X.p<f;0NoSCB|;RkN3Ik_z{C~B_?ir;i+03]AG' );
define( 'NONCE_KEY',        'Fx>WN8Q*vOIY6z).fm!CrZ!D0QKL5vEP87Z^{*,8>nQQ]$|TKK:(E2HX!1[S=&BV' );
define( 'AUTH_SALT',        'ycG(+,s~FX- *H0*FgJV+y.Tb$[gj{i~6:U*/AA/NKVh)p!;&~:h&b/7uDPQ7zA`' );
define( 'SECURE_AUTH_SALT', 'o!/n[g1&Ip5XKZWcbbs@V7NYxR9nR#>zD@-;9bG)W}UvxId0K=BE]|vIz3Xpzw7?' );
define( 'LOGGED_IN_SALT',   '*4jVWuf%=.:{N#cY.zqCTVQq#z5_%%ei#]/Y7QNs@:JYHP]aZc/&,Ms$lA{w/mAl' );
define( 'NONCE_SALT',       'W_h+csgx!/Ovj5F}y:c[s4e1^TWNyJqo:;>zzUY-P3!GDVcv56{~lRl&ang8@@mf' );

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
