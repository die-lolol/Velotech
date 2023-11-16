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
define( 'AUTH_KEY',         ')Wv(:Era?GFP@L -6-@k@,v}46_=C-}r*ASsKkRvk^K?;3Yj,+9u]-_2@ S2D)?(' );
define( 'SECURE_AUTH_KEY',  '5m;pyn#RSN|+R#q4>vr@$sBcl/1`>+o+,`?dFbFWwhxCmn4~#`1F?s[SLjI|=i`y' );
define( 'LOGGED_IN_KEY',    '/K~ouG3h<9}zfvL#V>bmGKNE.p;INWQ?JQ%rF~}?>g:1@m_vVofrvl>KN3;{xq97' );
define( 'NONCE_KEY',        'bER.p3Ox0]GeGN}[O`;M94H7w,$@>5Z4+za0geZ4=y4.arH:BkB#d6|su:fUZd`f' );
define( 'AUTH_SALT',        'Y+xmaspLp!9/.De#+01gNCm!Adejo%t[fX//6U3$rJ:s9=ss]yo)pY:0q)jlCSb~' );
define( 'SECURE_AUTH_SALT', 'XR~/x!sl&zWn=(tu/o?}PjG#lMGcgT(c-;#k./tuwKw,puLA:lhGV9x`:AYY9Rho' );
define( 'LOGGED_IN_SALT',   '<MwgHdoTYI+pW%z7(_;a *O1oHK Y~ktIKoKK3#e=?Cql$Hw{_#`}Dhh)fBw|p,J' );
define( 'NONCE_SALT',       '|n[6]Rky^=#Yq+M@<C,|M3|1bZf(,6!*N9-%!$#O`H+ZG(M/cn+{AwB?4TK{orkL' );

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
