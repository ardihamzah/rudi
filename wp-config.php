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
define( 'DB_NAME', 'rudi' );

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
define( 'AUTH_KEY',         '#>zs4aPI@?B6AC$7v<?w#x*)t4G=-(>:<f1Id~XkYThFD0}6.AkYA+sHh$}XJ:6h' );
define( 'SECURE_AUTH_KEY',  '$OK.)=kJNVJx]9BzaZib@x,gouQ(Oo4/5gWcnPIgTeyh^DbASjnhEw)2%!+f)s[O' );
define( 'LOGGED_IN_KEY',    'I3c^,U3o*T%j0Xd_YMjS+yJ^*x0oQZC@_-MggP2N^fMfh)tt`m)W`0xaJ](JuFwN' );
define( 'NONCE_KEY',        '1fnWdb.*ShyS:$?gatN7)kvkCr$rtbA>/Qb1wVF0h[4TSi.0~4!W&?!o3BecBuUa' );
define( 'AUTH_SALT',        'y(&K`38vHv;;T%P@i$VZ-mZ>62uAMMpGo:UX$G>Z0*_wn7N^r}UO95^)oA.~aOb0' );
define( 'SECURE_AUTH_SALT', 'r_2b*#)<VZ-Vu2qKLLIOXF1V.}^! `CC&CAEJePnvG:E {zK]0I&g&ysT2TM%KGA' );
define( 'LOGGED_IN_SALT',   'WG1e&|.v:C?R6bObuhYmj517Zw8Nm[{R-Uv~9KXK:f_z6Udqd5Y-xXVDs+I_DySz' );
define( 'NONCE_SALT',       'Qm/Z9-8sZGJ^nm^!ce;HB,8d?R}~kdh X~&^63|zOO=[dix&!n!M-a&v,Z,i0y4&' );

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
