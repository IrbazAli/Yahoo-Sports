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
define( 'DB_NAME', 'yahoo' );

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
define( 'AUTH_KEY',         '$?#qx0W(wSxw0M*LdGytdF:u(kj:w7(zo7DH{ufp`r]m_^zMV%#Xtmr3t9uGU{pB' );
define( 'SECURE_AUTH_KEY',  'gT?,v~4]@u4V%Y.GabW_EOxQgf7ia?}I2(C/xlPv|37HSbbU%ngTMOZP[s]B/A#q' );
define( 'LOGGED_IN_KEY',    'RW6gxm{;h<>zrjS>;.!c{q&i%&h>`ZAHIxYyYM#Q.B%KykqKvJpD4--yWYbV/n,#' );
define( 'NONCE_KEY',        'omX<RjGv;:UmV8 1) :.r1q<(_vW+h#P^NyOQV9?N,ab.KF*?:~V.F@=PuL<9-ti' );
define( 'AUTH_SALT',        '+?2f{fe:C2tdnB;fEc.)INA0kD^E9B,YbSc~} |L21kYb<PtBXPwDa4A7y8EX6z!' );
define( 'SECURE_AUTH_SALT', 'Akz~m^[GXNy/koh?lM$8X7}J!S#XQ;,CyU$u9l]ouq:[spY+A0)Fs<sZs>}&ry(y' );
define( 'LOGGED_IN_SALT',   'S@N0>$8PqyA7Wj9B|FaB<syx&}ddCI~-)PKNQr(;<XbpOEWaXkex81$0)(o]tX=F' );
define( 'NONCE_SALT',       '^0.l+S,RI46^&/:uM59@M=I0<1ZW7VjVDpIt)X~7S%(x-!{i~a~0OWo+YNTKelX ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('ALLOW_UNFILTERED_UPLOADS', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
