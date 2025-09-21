<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'motshostan' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', 'fJz(W55t]6jjMIL9' );

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
define( 'AUTH_KEY',         'G7pX8!@-?]V*emR5Ao*U+wr3-br+*SI(={&0fsDDP6MXrdov[;k5eLic=G@ihZ-+' );
define( 'SECURE_AUTH_KEY',  'z]z-9nZF&tem*v&b@] CN&>[$yMy|G.i^bNC({[U;6]A.t<~mb$$Wh)uq;_]fdjE' );
define( 'LOGGED_IN_KEY',    '5dgw8NsqmXkzl/A~8pgMg0ZOB:#q6aXb_/kzfBtUiL)lq|e*V|)+I.E:~u)|09n{' );
define( 'NONCE_KEY',        '+W?8|[-yfH7!A%o!`]Z~1GN:I<wRaRF0mF%~~bW?p3=-ejS:8)ZlZ.gnFZ?/Bj?A' );
define( 'AUTH_SALT',        'H>DY8+]hH9s,joKfW!q<#HY7fx}W{C.6hJz&Ss/$Hu0R@_]]T_vhM%gOJ`+Wb,TH' );
define( 'SECURE_AUTH_SALT', '=Sg:tW$zx-mQpKDoIu?Pi4#^s8PSe@1b:r%rtuQQHqorRAN{]+Q:!>l>{%/e010~' );
define( 'LOGGED_IN_SALT',   'Dts/H]zIGTCgRhC `DI/5cHv0tKP:r@8V;HBQ4Xff0gc50[1&E;cdg;tR6tW7qk*' );
define( 'NONCE_SALT',       'c9=>f)2m,)%E4z20:(v8t6.SP7z,csuSViOP^[r(py|~<k?%8%]VMikC:{s$<JsE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'klecqfk_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
