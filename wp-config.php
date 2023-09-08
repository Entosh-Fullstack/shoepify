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
define( 'DB_NAME', 'shoepify' );

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
define( 'AUTH_KEY',         'tk?9{?=sC_(!xvRNBNiL>c ^3+.[eGhl2gG&rocLmLh$ny$]mz!pm4GxECyFnvP1' );
define( 'SECURE_AUTH_KEY',  'G>,KCW5t+m:`.>n^^F{Bjj8xC<+rpyS48#G$:j8%`h+gw4I=cd2*N|KP~3N{-m:?' );
define( 'LOGGED_IN_KEY',    '$ipl@/+{@$Ku{t6nX-Ibsnr|5h^cE/sByY#}C1UWQB,d1xZKI$UR;W<LG.>~~LyM' );
define( 'NONCE_KEY',        'W$UaUhTPAQyn1C(YtG+PGo_b}5#+,}mqj_%qiy;LjS{;whn3JS^Ujm}-]NFumG`g' );
define( 'AUTH_SALT',        'X<]-C~ /{Wg|?eYC>zPOciOfW8Ml7Cd3Yg7h/cDmrJ%Cl8JHDp3~RR,x_0H~UM |' );
define( 'SECURE_AUTH_SALT', '/UzjO>!pwA5L!TCIT`WVxVlL^0:kRC2F}L;/y(n,IB}5508#x)&n2A<R$6J97T>T' );
define( 'LOGGED_IN_SALT',   'o.WV0@RW^0adp=pg|In}FX`M@&~HukW9Zjn==N8&RM+;[[oGjsWu0pV#h7Yly:N<' );
define( 'NONCE_SALT',       '6m:mLmRlsGdHlMB3k&q~bA=$;qp+_r3t$kJ*s]a1:^5OTVP?Q,k[>p{)zr((eD+`' );

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
