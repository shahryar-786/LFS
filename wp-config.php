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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Sejal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'a*bQ}W;yh0a[!qL 1kHH&iB4GnLwBXYNp52KOca$@:USJ-9lQFV$/5;O:vjfhq!!' );
define( 'SECURE_AUTH_KEY',  'u$G{H.FuvjMw:wM6H0pb$5n^}ywJ?DdQTz_o*V<]o?Mx}A=2A)5fWb`b<[p<{Xv]' );
define( 'LOGGED_IN_KEY',    '4yWx(bjt=Vskl7:2K@OpHBZ 0B5%/G]OQQOW`5Hz?N7fV~kaD:dEgoPZ.c&%cyQb' );
define( 'NONCE_KEY',        '+Grk6)#G $ N4$4cpSudZD3:0]d-vi$+;[LEEa{W31!FO{QK4OT*S48w6r*J.fbk' );
define( 'AUTH_SALT',        'Y)45l_%v+RI<J9xUb8zC p%M,Z<v#ta_i{~q(E^Gh|to%SHa75-J}K%rjz3N-}k2' );
define( 'SECURE_AUTH_SALT', '2|I0JP)1&47}+=f3m,UW,,CtBP0OC0{WRrK!|ExLpjkzVJ#=p0-M#Kcf/_xj^xV7' );
define( 'LOGGED_IN_SALT',   'I_[yA:IFMSTZR>9#keG/Rc>bR2 QWCdm+F)41xt4kg?1MR%@56j-z?LYD({Gox7#' );
define( 'NONCE_SALT',       'ZpGqgZY|M{.$nfFCU:-U}m$Z4QZ)o}&,61c-,_a]A9jA))q0E$wchM{%TZY;B^Ui' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
