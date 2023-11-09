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
define( 'AUTH_KEY',         'Xi6z.iB8M5`p}`X$d?X$Hpf|yo5>c_vFv:L>`Bw?{xxwS=0,S;xZ:M?--DIzS!JJ' );
define( 'SECURE_AUTH_KEY',  's~1%Z@Sv6}:/pz+;:?$MI$NL|u[{3/.zap!&|c]S2ErI(n6aAd!_Rma+XNYky=*X' );
define( 'LOGGED_IN_KEY',    ']h0>z cqZe|$fkb/*?CHhS8;0&=|MJl:4nLJ6CF7ZUu,vkMq)$<w ~Xu/E/b+do1' );
define( 'NONCE_KEY',        '`K.76|@l]c9v+&B[pt}?k;9aB+W}(`Ucl)w%7r9*H1oybkGBXkw0eT1hWL0eo8f)' );
define( 'AUTH_SALT',        'B?~1rnaLAtNsMEg)Yz|X)1T@Z|]rTU2R`qM(NA)XN2kJ2C}t^FEVU=_cq|6#|/H-' );
define( 'SECURE_AUTH_SALT', 's<h@n](fS<ATUtJG?.=X[r<gMz_/)KNn!l{VGEgg2<n}vH,WHCQms-_8dY]!V7[?' );
define( 'LOGGED_IN_SALT',   'J0c^mRdRT<(18]AY1Cob9`PF:~]zsF~,@X!vmiD9|VQCW&39 #hy#22Y^bN?4f{,' );
define( 'NONCE_SALT',       '~K+X^0Q9P(:E+b+mWDF*TKVFQAzv=Q7ag9n)tYuI!/![mgeAR16l(-(PD7VjHBGB' );

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
