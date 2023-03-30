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
define( 'DB_NAME', 'e-commerce-cms' );

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
define( 'AUTH_KEY',         'Ry$<,nF?[{[rMO}6]F<n`T4mhN_YrD]}5=XN<Xb?r0.Y|.P`hqqDzKrnRnzJ9F),' );
define( 'SECURE_AUTH_KEY',  '+O[+jYcl8,BYJ-l8~CpRt&ll&2WE|*r*f6K9~|fq$..gDh*eG<v+} )ISS_J.3Y&' );
define( 'LOGGED_IN_KEY',    'v]bT<%z#^1|Wok7?XwF!p -7Vwm)P/7Avgs@.uWLoZMtK{~UupX+tv=S=;Nzg5h]' );
define( 'NONCE_KEY',        '/xaV[PrU!hkEHeq^~``#1[&=bOBC#5#P:1ak%oI4mH- 0?{3Nd+pNPJG)!6E]g-I' );
define( 'AUTH_SALT',        'b6/~Y)1e9]kf*EdJI>iE@*fxm#,Evs^gtbGc;HY<HPh>=@Nn-,XUvD:EMLV)3j(:' );
define( 'SECURE_AUTH_SALT', 'siFUfi4u>Ok^a7f(vcc*`S}D2MyxUX*dYf!R91)&E*iy%aN]LHc 2j,l}?`C5459' );
define( 'LOGGED_IN_SALT',   '<A,Ah+9^(b~jpuMIkvmeMF(>M-VEmyn@Sh#f?2sR%(~N=}9yy.I,lqjf#}aj%|-:' );
define( 'NONCE_SALT',       ',oldotDE~9l:Mf&/qkL-.gR.!ia-E[Lb@Qq2`iA(qxglg-DEJVvuN*X +^%Ehw-m' );

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
