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
define( 'AUTH_KEY',         'sxEM@uW>%p(o@[f5kxuR>rV=LQ,DnP..!*Sa=6p:nws*5<(MCWtJ6?ZRjDJ7ELx2' );
define( 'SECURE_AUTH_KEY',  'A}GBn63^_Z)?<WpuN+G}@#L?{w6C,WBOMl4Yh:B]s]UxhBLWBS5m@Qv5`-0qLS(H' );
define( 'LOGGED_IN_KEY',    'r>>%e7R:Od5 Ae1ewNPsV?/ExTO&5xo*fngvOCfu23`M?%AjPK2Ky@9)##G2;1|]' );
define( 'NONCE_KEY',        'q-nUgwee[!74^y53%B#A`TzJ5?v4BP3?By7H^BY#0M2,$08O^./_yhWW3Vr~>X.Q' );
define( 'AUTH_SALT',        '8MU.#+Vc 5A_PK],.U}?N,I;pK~l+bo:;eGh:L=DP8nn+6iXf_38}?G3su2_4!qT' );
define( 'SECURE_AUTH_SALT', 'q+K%Gz=;]^](g_0WSe[Nrp=]IsCR|rS&%Lw?gX[J:&5);Xju:;qvk)r-!+&n2_tT' );
define( 'LOGGED_IN_SALT',   'bqAx>5.~,WY<[f%a#,[r<+kk?>A#;W0UvL^0^Q;MH#_*Q2[<X|(wRID,dmzqwy5I' );
define( 'NONCE_SALT',       'L]7N)dw/6,j]~|~:1DqC%H_(!XCG%UbbhLe2A04t_EW+md[(#*GTmvAD=+fS2K!F' );

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
