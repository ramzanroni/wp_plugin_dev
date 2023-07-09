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
define( 'DB_NAME', 'wp_demo' );

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
define( 'AUTH_KEY',         'Y(lgNDJkhiPr8Sgq0y]2X/Q0$KP/zIFNWQ(Tj}dr.8W7nVk%G2P|v/t)-RJi]+&X' );
define( 'SECURE_AUTH_KEY',  'J2z]:?e(]BHwoO-nz*UZ2(b*(,Hf@>{AuE5R2O.;3x]OUs}?Q_h>E.Bi:e=cI+nA' );
define( 'LOGGED_IN_KEY',    'T9p_.%ZPnfn6;KVs&AA,SUR?U~VGnRtBBb}ZRvkc-W9jl2{F0xSvA1=M>>r)^>8p' );
define( 'NONCE_KEY',        'pARA3[cCAOCE//ZSyu**lh#}x;81S!Er.ejePjX?Ta=6Yaefj#>ZDWX&[Rv$K{Io' );
define( 'AUTH_SALT',        '6+PR[>b5hNaK#}Dqc]Rl=baKJ4:;C6u^1a?TWu|oVa]~O!Iq@pu=jl2]Gyv|Gtc#' );
define( 'SECURE_AUTH_SALT', 'a<`KI:FN/{A0m.XlCS*=M$.z5LkIS$VJiwZ=+$HxOHj1[C-O~xdABlztv|k$TF9U' );
define( 'LOGGED_IN_SALT',   'R?/jpKRTN/xTl{dE6s^:(v75:ShQCp#~[iX~kUwJSUzB{(%C$-WZ/;ZMJ42{joGb' );
define( 'NONCE_SALT',       'PD#sc|*oT?8ytK$/(e3&d~W`[9%RDP~}#LhjxfN&1Qo&z>RYec)6HJlK=z?g}hU[' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
