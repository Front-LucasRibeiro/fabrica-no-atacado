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
define( 'DB_NAME', 'u582352071_2onR7' );

/** Database username */
define( 'DB_USER', 'u582352071_Rf5Hf' );

/** Database password */
define( 'DB_PASSWORD', '6lzF0g7Jcw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '7zRVlMW[Eu )TUQXkZ1E#@MmeKE2h*@O#LQvGx2KDr8Rj~@6?m)*sV9f$`)-V[&y' );
define( 'SECURE_AUTH_KEY',   '=-Ne9X;*u|eb,J[)c@?8BL`>`e5}q51~ncQU&tM?p/+(Wc,fl|Y;z!l-s0g,zmDG' );
define( 'LOGGED_IN_KEY',     'p>7dv)>k <[7r}$TfMC29`F6rzF84UAdK x:<R1>4mHmB`Z3]xDy}xchPq!x*ql*' );
define( 'NONCE_KEY',         '!9x/>1rOjck@<FDi`J9iL;<i@P@GKo(=NA.<JsU;>Se(W=+XZk}yi(Ad=!u7W%pE' );
define( 'AUTH_SALT',         'fLcmK,9/gtB?KCq5ySenRy_vqiC=QQ7k}C#V&7rEgEBHa<RwQkVZZL7],PQK#.:k' );
define( 'SECURE_AUTH_SALT',  '(M=Ws>?E584x+hD/W-2LYctzGJ*v}NMX60+r [FMxraCj`W<=I!-ulIXHC0<(1M7' );
define( 'LOGGED_IN_SALT',    ']C0LeJ)=jqRO4z&vmj([UXe:~UGw<Dt }J%WoK@3)`@P-7k]q3iB$r8%1FN>Uxl4' );
define( 'NONCE_SALT',        'd#+<cVd$?sOAeWGlY[c]SUdJR5Pz/zaHfT/l|n gW/&E5H2A)ND[b;UOtL8k0v9U' );
define( 'WP_CACHE_KEY_SALT', 'S3,O-{8nxZ(=3IL^Diny>IUe/AY$*RHB6P/%Ni@@4TQ|WHGLofM9P6E0wwWvz)-e' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
