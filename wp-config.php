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
define( 'DB_NAME', 'khoahoctomaz_db' );

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
define( 'AUTH_KEY',         '`,/7|Cadn9|m2v<&HbpigqQ~%{K)0LTH$=X06[XW bh_*8I};mKt7414HU.uf=0[' );
define( 'SECURE_AUTH_KEY',  '.?tnc9*M@T?.MU9oXWScs)U.D4vSL&qgE{Az4cL7>bgab}kGo{@y0YXJ;W>>7_X_' );
define( 'LOGGED_IN_KEY',    'FwD@#00FC}rQ4)+rM;kDw1Hh`R&tiAFy?&[<pjCIE;_R/.dsAFcEzo29=M_4,$ I' );
define( 'NONCE_KEY',        '?!};770$FY ByM9ItU-6--#xXt{kS&3Lm.-epK:%OP,FMA~Wci&Zzz$-+`S`;!s^' );
define( 'AUTH_SALT',        'z~r|Z*eBm/>!0tXA,Gt9kEleIDDdO.-c_rRC848.3MOPNK$JA.(}S %8MNw,8^5G' );
define( 'SECURE_AUTH_SALT', '%D(^V0%_ADM~IxU*S6h%$^V%T@LZIRyEC)wtckUP~$][< v]AI(=/X>^lNWzc%X.' );
define( 'LOGGED_IN_SALT',   'Y6*u/H/w/Fh<lL/;LPIKa.r 9mOm{*pv<5~A>8WND#~Xf|ER5d9`Vz*.*OG}cWf,' );
define( 'NONCE_SALT',       'srm@78G7+vkeHiy+=kY4!r5hZxyf2wjgB7xgzjsVlA+`(AL])m+C[]=js=OG{J&d' );

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
$table_prefix = 'khoahoctm_';

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
