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
define('DB_NAME', 'audubon_church');

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
define('AUTH_KEY',         '/k`7[(]n>A1iv@zo.~Ia5Ui$)kTl-/@?K{R;/35;|GKkpdC+`GeE|j312LoR4ZG<');
define('SECURE_AUTH_KEY',  '@D>GPs!gDaEU-kq@zg%7;gc}~^t_B+ckh fP)^0]5;2j>[whL`:qb#;d<H6)|bE5');
define('LOGGED_IN_KEY',    '^yJgm3.X-Oru 3fGxHw2u*+CvrV?^k[Qi2W4/t~t>3okM(dwH*K !/-0@{p^:}&;');
define('NONCE_KEY',        'rIX{j7Pzcd{B3V9ODwzC*Pl6R1hA{B(Waz{ r+&f+@B?,&&iJ}P&Yn7V-4!ET47}');
define('AUTH_SALT',        ')8[|z&a|&@3|-}|Qvvg kpn{AH-$EPcGWeAn]5@nO|MWk`wIB Es.hh=u[L!w=zT');
define('SECURE_AUTH_SALT', '7d!s>En54<nDV d[b/V%/@7~Bghw[Fh-[KT.YV?H>ChWenI+Nn|(chQg]USv*x|B');
define('LOGGED_IN_SALT',   '6a6)?;b2Q;CIDV8mzA:]wc~G4cJ-gb.+rr|f9+s&wN3y}wW0zb+AZg*o:CL[f}#l');
define('NONCE_SALT',       '[$=T#|tWI3wnUlY@d%cVI{y-0al%kO}kIXNhiY3q,pK@6d:>i,*5rd[_;qj+b:ZW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '552A501_';

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
