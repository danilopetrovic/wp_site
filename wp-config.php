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
define('DB_NAME', 'a');

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
define('AUTH_KEY',         'Q8@R8~}iUHfd$=k}{u?J)n,iciBzcc{n6v/qha]`yMgkWbL@!uL+GJvezc7lZJ(i');
define('SECURE_AUTH_KEY',  'Un=W-nrwhOden_}dJFC2Q;%Np}_)rb.^Ub}id}K0mjN|ZQ}BI,Es&wYw-.3I3}Dw');
define('LOGGED_IN_KEY',    'u%iZ;/54;>kvNGpQF#$E%[/~_*EOGtB-=.q57!Rxn|WB}7KS~wIw#f&s!POX/WIK');
define('NONCE_KEY',        '_phbn6[SOisR_~tys%e~5y8X4bgJC/e{mm9Pu:NU27%?]S^hHvzkku^]&|B$fjqL');
define('AUTH_SALT',        'OBFYN3C?Awy5<zk(!icuUo$;|nih:+YRw$taeC_kD$TT]HMu[).9Q48}.Ri4eLaR');
define('SECURE_AUTH_SALT', '1%*xu6+2AXThu{NR Zl,BMqEDv@kieeW9-c N6NU;e|gek-&4g-A=0InTHmzlW&a');
define('LOGGED_IN_SALT',   '2n^m{RqBKCojKl7N:}[WQ<TvZxf-3!~7&CVnyLwfugOK{eVCPeid}msw<7aKUU^u');
define('NONCE_SALT',       'l!IKo@mX+GHV{TS |K-|U~SfD?DWUh4^M]U:B;D(+D/5m7c~l*}]=^p]->tq#u&Z');

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
