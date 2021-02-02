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
define( 'DB_NAME', 'cosariodb' );

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
define( 'AUTH_KEY',         '{>pw<Fs&,sj@?y!@jd:loE4g#Y.t#yir9_N_hO8}K>_~p[{jcWu24o)g=,iOgyLq' );
define( 'SECURE_AUTH_KEY',  'Le)j&&pUoW~}Pt~(@An79wdBpZu_cpCceeQM.nQ`a=Ff&!l:ANf;$`U1!%Az5GXD' );
define( 'LOGGED_IN_KEY',    '&Fw9:DxfCSns[))vA`?.?n*B4]P*Ah,/16,b<C-@R_MP1Yx(eFC[!E9$pO2IgeJh' );
define( 'NONCE_KEY',        '%MTqhR811`=UWde*ePbuAdA*3iqe_~y4kf[p4M3IUO11EW>51tID&Z.7Ay)-_`MA' );
define( 'AUTH_SALT',        'GEbgNsQ:@E%8sayG=RU{Z qQ!ue&5JLfb[aq:N684sY8%*`=<-oIS$(]k25L3X-G' );
define( 'SECURE_AUTH_SALT', '4}Fje}.v+tIYf2#!?voNsP{Yo6x^Z>x3{t-C+YBAmP;jr2dWr?_jBj;ru`$D1|~6' );
define( 'LOGGED_IN_SALT',   'ntMxp[N&Je3$F?(*QUg3BDZuo*d;#.AX=fzBlN*P^yeC#+X4i8^!BV2AW$RZx=Av' );
define( 'NONCE_SALT',       '3eEK3*XJg8T,rIE+P)rV{s}AcNNcP!#QuuEZvfk6p;W%.VB5=)i0#rH-4P[yW<.i' );

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
