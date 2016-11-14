<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Parallax');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OF{.gxjz8+9M3Uaz#Q*uR1m^5|^+!/B3R2ZN5]rLyis66JNQD,vy|WVz&v`I`X`n');
define('SECURE_AUTH_KEY',  'Q)u&I{,IEScKsb5-(YjFD@p3mhp!>ztlk[5E/vL2y_6f3#< ;gmn~v3J{|{|6P]k');
define('LOGGED_IN_KEY',    ' k/dIW~Fj+2ye|QbwGVs?(B7|?*ShvB{XRy9O1q7}_.^m[CDXw]dgZE8ORH/dNCY');
define('NONCE_KEY',        'bVJi@8rgWDOYe|~+?zg=!m+s*9_]qkjloP)%:LmJN+fnLNrpz[[1B09d!!dS~yYD');
define('AUTH_SALT',        '3k2V9jDc~M{A_h9dk:0Y^K!Mz*!3zUE9%%k RtqbRmp#rLL*Nas]B_R56Q]0:Ruo');
define('SECURE_AUTH_SALT', '2z(aBSOQ+>2cNYnng?Mfh)>l.t(G_Md=>%<8Mrm/,0H_nMOs[#UrJ$Wnsug#}ENI');
define('LOGGED_IN_SALT',   '=7qyiXxo}&mD+X5Y6`5o(E@EN)_#]U`A~YU$[C~T#L;3&)Yfud6fghu5s<?]K__H');
define('NONCE_SALT',       'NQx1}`)jO(!T7,!]5LS}~G~a^G)v~QgNr%Q`, ?<^H[<9g<z0s6u!$xTRH8]fCw?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
