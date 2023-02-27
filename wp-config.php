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
define( 'DB_NAME', 'weli' );

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
define( 'AUTH_KEY',         '6.3W}BA6Cj{Vm(nh9A<<JaGnC]81_X^_Q=4~U>ghc4|tCx+>xlA?w_9-,}  t^.d' );
define( 'SECURE_AUTH_KEY',  'B7B{|[RC(5l!WL>,prdD6+khu#)FbVy/0(:INNi^K?Xj^/4Z#Nl;p)mY`c?mHk_7' );
define( 'LOGGED_IN_KEY',    'HjZH2M0`6u9UzqE8xs-RCc771q-`j5CT^$uF5]rJ{lK4..Hg-i1Z5&_M&3GFI;h!' );
define( 'NONCE_KEY',        '/,KsNqdv.!</5oW(7<?&jI/m/fH?AQ0^|mMb~ZgES1HP=OC#GW2yw?}e[KO4]a} ' );
define( 'AUTH_SALT',        'vBt{[V>CwFG4J^X5yCh@z)Uq~3|!7|Dc@,eJ(7=SO:i#_HsFeG^GR4$1`1Bid?WA' );
define( 'SECURE_AUTH_SALT', 'C<4M^l(AKHG.z>_w-j{]8|/Sp#}Rj`K/]@6]M`oXw[`lKwrG7&a?:J4_,9C 4s9,' );
define( 'LOGGED_IN_SALT',   'LAkEnEw%+xSI.O]c[QwMB{|Awo~_Y?~5Li`E;D#XO<uRIOMf:iIY4idO93N;F;]C' );
define( 'NONCE_SALT',       'B^R)T):dJ2c*vN&uGI `_-Bis?]f?v9i0PuLHw $D dng[MI2Hg.zwCLTA{*y,l9' );

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
