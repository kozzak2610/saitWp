<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xgym' );

/** MySQL database username */
define( 'DB_USER', 'xgym' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xgym***' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6Gl&L-FN/&6ng>0[~L8w4S_OX|;(>EYB@1] 0duw{[~wx),iUre7/?zNx~$3+w1)' );
define( 'SECURE_AUTH_KEY',  'I[vgd!01dgn18XhN^+T5<04{*@`i*[y4@6/Dh)5.L<ReQ0dr.PJPk8RHQ#$%hWq.' );
define( 'LOGGED_IN_KEY',    ')DhDF5=ql8Utn9w/%33<O0c)B),GQ~2SyR_xu*vBH&]]GhhMGbZ+~R,cH^j[,`;!' );
define( 'NONCE_KEY',        'ywC:>xm+{4a`.Up!7t&{%m6.Y2!gkeI+S`pJQs&GIk)e-cFD nik[/i|2Mtp M8n' );
define( 'AUTH_SALT',        ',sC~[8yAm]N~3Z!r+FW[G$11wy]%|Kd1w.]T,+4d>sgcN2~r6s=y}YO<qm8sd$p-' );
define( 'SECURE_AUTH_SALT', 'MX4,/~PE<<=AlsvQP,dzFR.erlF1* 61,M@3)[`4BpJZF^uArLPFFGg%+W<,2%q@' );
define( 'LOGGED_IN_SALT',   'yb8.g)iFEcqCf,Ez=Fq~a>5(8Q7E{d8sCB6qebnr c1{ 5N@WKV%0[lwEI7DV+4A' );
define( 'NONCE_SALT',       ';Y`rfRMO8Kzf2Di#)>6UHP5%,8-9]qv3<a+jN>^588BSGiy9FzK4 %niPqvk?`%f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
