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
define( 'AUTH_KEY',         'i6&uFY1j3[$>F_Kr{#`3&sOCJ~I=C>kL9L`(1E^pa GCu=qG@nD^:-B0A*BDF-5v' );
define( 'SECURE_AUTH_KEY',  '<|kqCb*jS=y6U@tqevG~~4oN)xgN4B*xM*Z&f4au+sL8&vznI`.&0:3H2~Oxw<.~' );
define( 'LOGGED_IN_KEY',    'E(r tk?Ycm#p.rWKv0Ev[QylPuWk8X`d#cYxH>LW*h2#x_R]-D*/f(Ut8*J5vzF ' );
define( 'NONCE_KEY',        ':cIPl5w]*ICG<3Je^0>.y_T?:{XPC8ziEHgRFl$oqvOA{kVN.AL3%qO=Fp[OB&LK' );
define( 'AUTH_SALT',        'OL%N_6P)yXV2f?givdvS$r<Xn3>z?lxSm?x^NP(a:!?]QvA!y[e{}y&gDR^pA3cd' );
define( 'SECURE_AUTH_SALT', '@9U2 )7btBzM<qjE(j>u9mq29a$ml)(gQKHE7i+,O4h$|m^J}i,T_{lv5zt84,bg' );
define( 'LOGGED_IN_SALT',   ']#,_?Wwih2 5d(ZeWtlD$}u]t;}7[ptL=GVSrf<Y)U?D2UU{a&FqD%zZGOGVj;wB' );
define( 'NONCE_SALT',       '4/uElz`8l7#zp1AX$qNsZ`kk,sC6iCIooTOc]UrLl<&>h!6DQ!)m(v5eG 37Ny}g' );

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
