<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress-project-db-2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'R[#s<F(tp&.q(-^E|C8(~N}Mv_KOt/dWI*|Ul$>;ZH+u*pThppwVB> <0X>0bOI@' );
define( 'SECURE_AUTH_KEY',  '@E&|hI; I`-w*[bG4;L `)h>=>wRVH?u$Wm&[z9%q(Y<k9]{_] zVAYv3GR1;p&<' );
define( 'LOGGED_IN_KEY',    '/-5Mq4VC]fKe:SOK6B&U0.v+fr=>(a)z:<s-Rglaf7*(oDR},nzB%4_?IS.sV9Xd' );
define( 'NONCE_KEY',        '88nLucBUoxs iLW|wNB]uyun&Q(cpn[]7 /yHQt]*Hf)F5D-sdpl[RP;_!#[nbkK' );
define( 'AUTH_SALT',        'mc?F(SJ$a4zw@C? Fbt|N]c.j!13ZoLI4rlg-E[*)$GEJc?*#t-n.kJ. ny({WI[' );
define( 'SECURE_AUTH_SALT', '0JAAdl6E:h>|D]pmMajfP*On2jHJK &`b19O&-y?7Nn9pxm,J=*ELvi92<l`F%hh' );
define( 'LOGGED_IN_SALT',   'ATg,FY{-zIc)vCF/O]iWtp:&)NFY-g}&k`+CZGS:ECQ{D5WIz>Z_JpZP5](:{Z_u' );
define( 'NONCE_SALT',       'reSDN)MvTg14K ;#,8UNo}p)e83rYtOo{JR9.[()ASy;JWU)Cl=;^z&/yGfQK[Hu' );

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
