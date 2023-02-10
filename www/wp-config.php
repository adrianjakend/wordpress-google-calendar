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
define( 'DB_NAME', 'wordpress-calendar' );

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
define( 'AUTH_KEY',         'fS5irc:EWepFxv!Sm}X-*NY|vyG:1271~RF}0&a9V;WDye#@/<t2>X*k*FqIKYt}' );
define( 'SECURE_AUTH_KEY',  'D0-M-|{Fq[2^Ulz4NI*ICy;jf;gj)i^.7O4 s_m1[zuZd>-UzU4#;3rsTV#F=P=j' );
define( 'LOGGED_IN_KEY',    'm>!Vje)>7rg4npz$81A5kdSQjnE8X&xA~MA}SS#[cne&UEP_H82o,/%aEX-S2#jf' );
define( 'NONCE_KEY',        'xhDP@o@]Shz*sRN=E}AHohi~Ay1(~HX[n;d>1t#)4Qa,R?c9T7%dhd%e+9ee5z!P' );
define( 'AUTH_SALT',        '?C2vJAb2W_U}Zjo^2nTD<GtEMM^&n|dMh/h[rS|t]| 0Ms(ah%NpAiq<yyR<QZq5' );
define( 'SECURE_AUTH_SALT', '8GnUYw@9.~94vqlP.+xa$JD9~.Cui<3mEMs/z-_U&+%#s$,T1{,DsB;r]Ru}f~~f' );
define( 'LOGGED_IN_SALT',   'WCL!}3aG.6jcz05!qHc>go2N%$*L)oS/a4(up]K l_J|rkl-tFL|jpkNNgK,uEvQ' );
define( 'NONCE_SALT',       '7q_Z]:uXZs+kNtWd}VXcauVVKWb%Qgb EW*ad V*7CUkS[DRi0fIolq<;Fjy46K^' );

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
