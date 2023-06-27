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
define( 'DB_NAME', 'heshamshops' );

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
define( 'AUTH_KEY',         '/ kvl`{h6bu(Q?/nM~+lAGUwkK *+R 5At&RPXX(T`N~<n_0f{@lq1?&KhxLEiF^' );
define( 'SECURE_AUTH_KEY',  '0zZ/2e@tR-MP8$7kVaj.pvaLVOj!c=st xrGI{}MSXl0+] DqVG2ss-@AF.!UITo' );
define( 'LOGGED_IN_KEY',    'su&F.O,`K7pgQkU`b9WJ!?,WPG~p!L$7q5F{i0z)wDgaV0,+!Ex,;Aw9%{(G|Nq<' );
define( 'NONCE_KEY',        'iiP>&KT2AA3wO5x~MzUSM$Xl5_/6<_y,,*hh;?gY4D.Rj#.R{ITVwFe(tQctfyO^' );
define( 'AUTH_SALT',        'Gu4a@2?hTP)]0kn^n4oY18geai5IleB%k&s0B@cVDSCoOaHldP8ehB bi0zYR0dJ' );
define( 'SECURE_AUTH_SALT', 'RQ>`wJeMXyhz>My&(Si.{&!f|]t-}]]R_7y8P)b[^}2T+#7eo_h~:K5N/G#|psOE' );
define( 'LOGGED_IN_SALT',   '!tWreO?I?j]b!:kJ1:y~ETS>sB@4AW3,rd];/}g*8pqs_g:QcOE<6KWT$#g6nA64' );
define( 'NONCE_SALT',       'z+|wg=*<!SK|eTD{Dl:G0L:z62,,i{0?xrAj$/}t)[Y]8PUo(1a4h6b4[+PvE&E>' );

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
