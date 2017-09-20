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
define('DB_NAME', 'wordpress_david');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[WqGLnv0KK^|%8V/AD/;A<p,$$WJ)+Fu)2LJo~)_q~+YmW[hA>VWv0nmS:qsvF;m');
define('SECURE_AUTH_KEY',  'I5-j%`RO?1:~*.]!@/.Eb/R:jp^k*L-,W0hNNfeQ5zSJXi~@qjHGTgGO42etBC0`');
define('LOGGED_IN_KEY',    'Hk.F+8v{l7o_M`v=tw(08WL*]Bukwx@@>~mn;#PuKG}Duo+C(SM0]U#lq)v7Ju9t');
define('NONCE_KEY',        'R$L($Ni{X!b?%;z}YY!x- }JD/#L-.l<Ov4oF/h_mJ}aocHFXH%;]{B8pmrgm19.');
define('AUTH_SALT',        'Z(]Z[I]~LN3a(@]Kqb$0Q|)[NO=B#?<i`wO1WW[9$2|8@nLmZ9,C>lkJSv<ZlM,Y');
define('SECURE_AUTH_SALT', 'w7pTIW+XTUWdTk`f9*^dofv);:e3)#{<YUcJ~b(%w(4X/U&`Mr&M;q4SKv>:bVph');
define('LOGGED_IN_SALT',   '/]`UaZ}OG ~POw^$hbDEq()N8>zZ~7=D 6ytc=o( lhiB8&hJs*RTLQLh)(qS@^.');
define('NONCE_SALT',       'bgjMQ/O(`WUq+@;0 sF>mY c:--zdySA]CnrvBNKs%E@mEmz|n&g :nO<b`1T1lG');

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
