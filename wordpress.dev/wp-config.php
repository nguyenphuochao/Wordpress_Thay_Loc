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
define( 'DB_NAME', 'wordpress_thay_loc' );

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
define( 'AUTH_KEY',         'aPuPW2yC6 Sw*yu;{2kj?.wt?-;6lrF(38FERno:wI57`h@Ks|.0@rH#%+Gk`2|Z' );
define( 'SECURE_AUTH_KEY',  ':B4bL[1rm==0K(q (k*m/sdUxe_[ZZ03lSTJK`Iy^TPN9_TSN8)uwPfFAbE[vl&a' );
define( 'LOGGED_IN_KEY',    '_mq%UiFv.>X{(2 &!+Vig}OhoIEX-%-jj:%>TX-~)<$si/(9Ng$CXOa8(M*+r1I?' );
define( 'NONCE_KEY',        ') /Icd*MiO3MJ`n}<Du5PRg&L$/8WA%||h1_N.#3|_;W,rmKzTP!)F2!s$h3$0p/' );
define( 'AUTH_SALT',        '[| {a&+&{Jsb5Z>;wfYwf`Wde@CN[HZ>(X__}~x5u(@4pIu*d=tYGc0n-2F@_8A2' );
define( 'SECURE_AUTH_SALT', ')3H%>/oETN85`1#D7Cx4qX8Xqyf;#M@yDp.o4BXb#>?@|9}NPDp jQ7JcolARNNY' );
define( 'LOGGED_IN_SALT',   '~KC>5bb[>MEH.?>QgHFrbl/kc ~1%+8;u`JV6Cb(0KsB8R0i}zqWdSKsCw6iLdXI' );
define( 'NONCE_SALT',       '@Hbn@F;YmdC)=fbQ|YL1v!49ZnQ`}CR`*]-#k_-8o5zs,|P4sUz*}=OT1D1S^|_N' );

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
