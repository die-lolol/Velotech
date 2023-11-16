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
define( 'AUTH_KEY',         '1$O@Et6lwM]qRa0pnTidfF%j?r`udaJSVU}twVZ8Bf#M9+?.gg.S;9/]3|A]CL+Y' );
define( 'SECURE_AUTH_KEY',  'E2n{8c]&ys YF@3$*}--64MxdUBcgw{}2|n*DXls>Olr|3l<VSY|Tm}o<vcjEimm' );
define( 'LOGGED_IN_KEY',    'AyCerVqG=he,cEGfq5g_q.wgyRC`Y.ahlR%Af&Ba1>DzcKcDEf[-DDWq|:Dkriu^' );
define( 'NONCE_KEY',        '19FQF4N|?hpjk0~>+lb|!D%[ki<Ef+om6Q3.rJb=B)RjsHL0tEiS($3nk78SHCx,' );
define( 'AUTH_SALT',        'LWg;70@Hlkp%a+|$:gWloG,;L =:+wrh:Z7~1`.{~DaGWd05R@J|a=$!2uB,R]QH' );
define( 'SECURE_AUTH_SALT', 'ucTO)y5t*u~wQ:@ fv-G<9(DnkW_{8>a0.(bFv|t+fduMOByZ?oP_2t5_Vw*dt%t' );
define( 'LOGGED_IN_SALT',   'Te&>!Y5qPFX;10}tgf0;D*2lcgYEJRxIEOlGD}P8t/$De}a(KSrx<Pdk.]L@4-<o' );
define( 'NONCE_SALT',       'M:d!zA9[(~S8yq$5ttm{9sz(z,h/Amm(vt3hJQgDHN}yn5moS$J _F%~>(DJ]GP[' );

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
