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
define( 'AUTH_KEY',         'aH2gku<6{^*Y^.lOy<g!~StGdGTq)B[lP}R%sc2lzf_f7[v/Vm%b.PyE~1#q##q>' );
define( 'SECURE_AUTH_KEY',  '9a2@+Jt2k%UVg+zZe}6K3NQ:ptZ{m+kgoazO-x8MDIY|EH:3qv*1{-Fz.&+^>3jH' );
define( 'LOGGED_IN_KEY',    'O]]!;28zk,>j,_<sR84l5UP[>f.@O,RdCxX%XAR^C%01SwPqI^9i}Zu6i%xZV$ow' );
define( 'NONCE_KEY',        '6*(%T~C6%#wapUPWbANt.$ *xjUdir7dc!lS$r0CMKn(XZfLzmD8kX&u~$RA+R{%' );
define( 'AUTH_SALT',        '_}oG,2y:Hl.n3U+<S0yk0AXOxAXv})z2BCYOtxs(;B[O 43#p(Q}lQscKzHPk?F6' );
define( 'SECURE_AUTH_SALT', 'U3cx]<fhSle`A qYTOz?3Bn^9X[{d4=/aRJXW9>yKH`$+M;E5n:ySPwVkaL,k0tM' );
define( 'LOGGED_IN_SALT',   'o$+L%@Yy74N]Tu,=cuzon4L?N,u2-Yvm(T/AweBK1P wv92/Dx$Cy*L9SF<r;Vi+' );
define( 'NONCE_SALT',       '<UA%ux%r%Tc%I~M53;>&H,:eF%R@(zda~s`#[=Z[IIBP:/*GF]M2r6Q3 -B?a%Lx' );

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
