<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nyata' );

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
define( 'AUTH_KEY',         '^bqR{W:j9ZT/v$() CA4HC66kw)Tk%`U@=ntOJj;sH5Ycu~y&|}^c)o-_dCa$~}p' );
define( 'SECURE_AUTH_KEY',  '_.}&3jz2&OW>PAlGX@?5;ig3)f2xr~*MMa*}&D$1e= lpLYb8[!9weq<I&g4-%5@' );
define( 'LOGGED_IN_KEY',    '83@wUt,<^x!R1ln0r>VX#]H]%UFky$hpxN/2`DA*g,}Kc!z+26Xam7T0`qN^urq(' );
define( 'NONCE_KEY',        '#WW71pd1|Lk]D2O/rt%{IQMbE~%muY+Ei;Jpg~yHQ5p#UJXAjoBtzeFx-]wz]!9Q' );
define( 'AUTH_SALT',        '#~+Zchm|T?[ABcK:kf rGno[f5Vn`OpH~|O)Tom^[HM uO03G]Chr:Nk4H#0GXI?' );
define( 'SECURE_AUTH_SALT', 'SS4(j,WASP=8VgVtd-98p}],{~7shg{(Y{zH)P(ObtT@SL_whKu?<E4G!m(HI mF' );
define( 'LOGGED_IN_SALT',   'XE)mw,F?mO_[iQ/$cB^^8N N4B[j_GJAbuUX4.ffrd6N5bWG+kV:;~xx4h/eI!E-' );
define( 'NONCE_SALT',       '?tqKb_da~QvE.>jZLylI^S>wCrk:Ksw|K0)a<5[N!KBiIoVpeht&O`d7 fr~O*5@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'nyata_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
