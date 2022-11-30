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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define( 'DB_NAME', 'random_project' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', 'MyClassMate!123' );
// define( 'DB_HOST', 'localhost' );

define( 'DB_NAME', 'freedb_random_project' );
define( 'DB_USER', 'freedb_random_user' );
define( 'DB_PASSWORD', 'rt@4NWC8v*yUXB&' );
define( 'DB_HOST', 'sql.freedb.tech' );

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
define( 'AUTH_KEY',         'k}LPUwE&|N>NHYcL<IiYSBPz6dv)rwF9$vI]Z@YKSQL[NFAymwgY[B;RQSthSV|[' );
define( 'SECURE_AUTH_KEY',  'WyIJ|21Wufkw*!aT ^&ohX1yub2Vh8;|o@o#HQ-;+5q#?f1-J~CC0eJX m`g;#8x' );
define( 'LOGGED_IN_KEY',    'Je H&%Mz&BV!@~/Bp}X)pl?7QWOE%l;nnLCnH0Ke*T2g2Ei:IPOzX.H ;aRwBIcc' );
define( 'NONCE_KEY',        '2p9uSv)c[lD8j7cjQUhU@KdL8w&eo2De2mD.+RVbet]:/+_&%EiU(A{NR`3v%PF`' );
define( 'AUTH_SALT',        '><a!-~P,(v/#}<%a*S]-[*zd%CKX:?.qP$-mXj`Pj_B?d#bD*A$;rv)4CDUTZALt' );
define( 'SECURE_AUTH_SALT', 'JU/Q$*1nlF^1cJ[!`.7%M(GhX0NP<kzPcm2BIyL-=M?Z5,vAroSZX@yTzD7=7:,6' );
define( 'LOGGED_IN_SALT',   'cCl~YwAGXeWa@fKnJ=,|Td;as21zi)Tr/gO|29*^&K CEAjBck-4shGS]go-aT5~' );
define( 'NONCE_SALT',       'J/;6LW-Rz[(.cnn^l=(Kyp>>ME6YLAf$Bh394>rv080j0,|D1*mFIO6K<D%gAU:X' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
