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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'react_gb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'bh:7T3ALZ.?`jP$X]<]muKoOe]yRN)?wq5~:qz#{vbK&>~z83&{0N:y/!50,Z>yr' );
define( 'SECURE_AUTH_KEY',  'ztId</h?9C&cm)[>qW=Q*pI^Ttp/5Ev[LYtoLm8u<B5UAT<~ wvUh9[7~o`Pqsw#' );
define( 'LOGGED_IN_KEY',    ';]V/31waNKG[=rk?h w)j9vtD`Sv?FOa#n82c3TFD!hWZ58$fOg=}QBD:X]7V#TT' );
define( 'NONCE_KEY',        'cEj}.NTS;e72KWx?MZD, -La!&SUo!G=DvAtF[[QXNExM2e|s/f>_)b1)$frH0s6' );
define( 'AUTH_SALT',        '-sn{PwdaoHu`Cq&jd{[G-m=S|!HSOdQL#CUT7W>o2%:Jog8radg&HBNYdd<*9a$J' );
define( 'SECURE_AUTH_SALT', 'd>]2acBoY8A=@Hdvl8N]t-V;JaaqKF[Ni{|,:FWgx;?+N<957YDv&-XXkZH(fymh' );
define( 'LOGGED_IN_SALT',   '7(MT[7&m?1_XWc=<f H[9er^pRZOErTR)CxoJ6Laf_U[Tm9>TL,f+K>GJU,.0!>Q' );
define( 'NONCE_SALT',       'I`CgE(<g{Q7Yydp&>{Fg=ta6m<+=EAgY#y-E!>z}opA[;nd6RlHz_wQ]E<~-$:xR' );

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
