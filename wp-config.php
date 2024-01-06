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
define( 'DB_NAME', 'thiliniportfolio_db' );

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
define( 'AUTH_KEY',         'K-oQMVn>2QXJvZ-bePrsj%UIWbx{/(_mT?+57vMN-7KDU?G=*pQQc#qFs*~z;g3_' );
define( 'SECURE_AUTH_KEY',  'OJ2VGZ~pD(V&Tst<=.FV|)q6+Q3DzXNV(j5aGlJg#Ndng|018Tp>Y0}5}M.?mJ-H' );
define( 'LOGGED_IN_KEY',    '@|WR>v`ZS9&(9Vv]e~mn9tKP^M2&pGeNMZ33^&^Sc9~X([`Xve$8v)T%W6/Js88I' );
define( 'NONCE_KEY',        'avN6B9z2<v}<jcc6FXD(4_XM.TuhRxIO[dpW-X.g.R)9MP80g~MDULjzh=<<Wx_!' );
define( 'AUTH_SALT',        'cNfQ@$CSVSLmntzKRhq*ub-{+FndB%b<5^ IOXYFg8VmEIP]v&T/oir^Ec?c*N[v' );
define( 'SECURE_AUTH_SALT', 'Y/$.`Us$FW:d7lrd+ydp]A|g$-GUYM0?A`S-DnN!d&3d#?oFH%WaZ>G1~cegfWoy' );
define( 'LOGGED_IN_SALT',   '2Jc<]B%*phXKZ1;M#4?{|Xv~?JG7QOZTE`8^m:hVI)hw`y5b,hh)v8.~[ZsfT(>i' );
define( 'NONCE_SALT',       'Gi>}c%ARF,On_gW${Y7n[hBJwde1tpBJ>:rC|Zhid4KNzw|Co3<Z:#0[+);(N%u!' );

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
