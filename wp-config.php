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
define( 'DB_NAME', 'emarket' );

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
define( 'AUTH_KEY',         'GD)aqPP$3[$zw0Ci(#>j:OX`T2IAa`{f|UO,B5P8a:XpHE&YWK_mP:GEkj,-@T/Y' );
define( 'SECURE_AUTH_KEY',  '<oN,cNU|KXEcx9OP0fZi%W2sQ]H+LDdaS]:GV 7)$EPKf|ilj:tz:GSewB}#sC=s' );
define( 'LOGGED_IN_KEY',    'xItRC|i_.iQC:xW0s( 7{-ty{fAE#U+C|`sL/3Yh&?mf7E4[9@r+2M3,.FzwfN4c' );
define( 'NONCE_KEY',        'c2zdB;#$n6nGlI}m70RY=f_BL5)l7OkCq.!yqxtFdEke{WTdqJ5.5pU^>#mtz7QR' );
define( 'AUTH_SALT',        '}7g#*j|V i3z(QWt^Q9X$+Io:#UumtwXYV{C+M:h5?pz_CFVEE0zy4Loio4H>Y(G' );
define( 'SECURE_AUTH_SALT', 'p$8_%n>X0;<x3Sa9?oo(kk#d+y`!knl&`DkjWd3QBn]@`[<K.|r,v:>k.yooo)jM' );
define( 'LOGGED_IN_SALT',   '9|[1#F!IxlgD9LnCw10Tu!8Uw?vB`N<|3CL z}g3_A++0zS{d2+=J.EM2gq~QWSD' );
define( 'NONCE_SALT',       ')#7bF*$C%bzW<AGeEz7b8<j+[Yz5%Vu7w_k61$LK#;G.b2(c/x<y88cUG^)`A!fd' );

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
