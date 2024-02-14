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
 * 
 * 
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
define( 'AUTH_KEY',          '@qqsp58JWAREzo*K(?_ZjFU%tV&QA]!Wo8tZwFv<uS3BwRs&^~~};N%l.Xey|G6P' );
define( 'SECURE_AUTH_KEY',   'EeSCYDT&L=e3niIji80Hun#iS@]>B$YNC&TLJ2vC).,oK=U:i};;WET6~G-ZS?%g' );
define( 'LOGGED_IN_KEY',     '+xtH(9!M*7K)v bW1aH+%]Rt8)21KlHL*9uVi4|dNTY,4h#dlF;woeYH)^)lt|L3' );
define( 'NONCE_KEY',         'y~nVxU0DdeT_%yxMezs29pg/bl& *u%]0icj8qZpYG?(c8Z*uX7&u^,Pp@=})Q?!' );
define( 'AUTH_SALT',         '>_7aj|;{YvcG[Z;|OYaZ-&+PbnecpSugJiVY7%@OEA:Xp|$}mKTt%i#FiKJ(L8k/' );
define( 'SECURE_AUTH_SALT',  '}Twdufx|2I&;Z!Q*iog}C;npJ?Tk|g8Ptb/bE`B3_Zq{+m88hRQ9)i/$orh[j7cy' );
define( 'LOGGED_IN_SALT',    'XdK-SADu.@4{cy&lc 9|i7V23NnMKVR}Pr&L>CD+M0mW*2o WebC~{}Q~[`efpMQ' );
define( 'NONCE_SALT',        'R9YBJE+KHC*4pl:~6f84iY%.O(ZSwB8OI~o0#,c1sXOdj(}t[3L<u]Jx=Z;u)g,,' );
define( 'WP_CACHE_KEY_SALT', '>g0=#pBQ&E/)l,,@$F>;diLb*4#z_D,9t{w92;M9gulwvDJt2m?|0;:&gLS(?JId' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
// Estas líneas deben estar aquí, antes de la inclusión de wp-settings.php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

define( 'WP_ENVIRONMENT_TYPE', 'local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

