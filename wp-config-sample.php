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
define('DB_NAME', 'webinterest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3&!yd @d,<;8G4DmW+;+Aj(BCls1@-?/rrJZvEc6JZKat{]G`/RoxR[/$98|Qqj+');
define('SECURE_AUTH_KEY',  'r|#.rT55##-l?E0xB478}68#>YE[Dh|$`||lx+![E*:iPs0VdZD&f-QUlMXD==w{');
define('LOGGED_IN_KEY',    '/(i=7Z.T%y+h?T]4O sj!8a/!Tm]E-*}+Gs|s-*3^VqUPD;T~0pgsEg=.moS)[IL');
define('NONCE_KEY',        'BKzG.J@`VIjMJv|0r&X1j(:Ro4u$eR3|3i>:|3; U0nH@[*ry9O3|7jr0&7awvQo');
define('AUTH_SALT',        'CBdj{tw-X--7@_eT5Y_rJ2l9|Xl%-gw&09c-!GM DlU&h}1%EF>CHL{O5M+S_Xkl');
define('SECURE_AUTH_SALT', 'SR_Z&nT#7.fd(c`BP&iAsfUQL,D{r^,pIvY|)bHNC}y>9GQp6yG^$K?g&%AX/!qY');
define('LOGGED_IN_SALT',   'a]cQKfa6P83`-1otlGJx [!%J+.{_9c*%vMM]tCT{/9g,+`R-[9H[yL9$<Lf PDz');
define('NONCE_SALT',       ':dss!VqX1C.R?+Ji-5@?FtU~#dXfTg.U_B@wt(dq>yrF^sC1{?uP>?r*(rv038h.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '2s653901_';

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
