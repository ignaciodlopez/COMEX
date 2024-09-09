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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']P7H%TZVSOv)<PS<POC:@zKmx764k&<FL-kB1e63sl0(7QTqr+JN-OrDsZq8d#qW' );
define( 'SECURE_AUTH_KEY',   'jDWuZ`YG|x1pVNI;*LQC-4Ihu/L,d[N}vgBs9MXE}_Mjqdkij,[Nml/O!C:F$Z?(' );
define( 'LOGGED_IN_KEY',     'Vc{%Ij&M)P6S{mz//pk~M|^](*;~]yVA1yaX2g7<AVB0N}(eIb%Zy`Ko5m>T0?v0' );
define( 'NONCE_KEY',         '=s?4v}1@sWI8AXdEs0+DQpr1_wy1PpOp>@t;Vs!S{ c1MkB<H!kU{-{@{_*T&R(`' );
define( 'AUTH_SALT',         'S-HaP#o.-Ok<M)L%/wM82(qdu.B,_ Q_gN6)ztQGMg:pEqKt&,Su_v}`I<S9*HoI' );
define( 'SECURE_AUTH_SALT',  'kuGJ,lbA.!)^rXb_9k(dcws}n$ou>aRVv7K{4zMT+[Gd!fZ#s Y7o8;Uzz##<~CL' );
define( 'LOGGED_IN_SALT',    '2k}d1-doF_2HbW,:l/n{!Qjy&9IqHZzce!r,R7XaH`3V+XE+.[zcOD`V!/O#/00Z' );
define( 'NONCE_SALT',        'fQI]7j e9BN1/4L=1]h_{cYlweW.wbDl87./}f}Zy>^Z1u$Th,IL/1N[{=jVD$uz' );
define( 'WP_CACHE_KEY_SALT', ';4#rnvyO{1Fks[DGDg@oFMc}QD~f{Q:<To~>@w+-?~Qj$e5!w,fw&ae+:7NWz7s1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
