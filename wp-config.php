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
define('DB_NAME', 'wp_escape');

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
define('AUTH_KEY',         'K]X7$B<]9:.&mF:r!0X/}V%Zhjj{)=vvy,:{.l<??b$DFXMcO8=F5MU(1@i>mES<');
define('SECURE_AUTH_KEY',  'R/RsgDS9UV4hoLs]u;^k8@xxqP+Zt`449m+2_%<?54G=EOc$UF#Wcc^mm65nb8/v');
define('LOGGED_IN_KEY',    'NC{}Rug]?Nf0KG7~zpW/[49p_}AoU7%I[Dsiuwi^ApSe|EUt=t[bS0ICmi>[qLbh');
define('NONCE_KEY',        '}Z $OnurpvXysg8IR$iZX%Yp~6@uaF>O8yb,l&Q.[i[E^G-l#{p]0fc0TFzPa2G9');
define('AUTH_SALT',        'd*IG96I#r:E*SQ5jMLImU eUcPIeG!1cFk0ab%h_BxVs]eB+BPs&1)#b</?0H*(b');
define('SECURE_AUTH_SALT', '^U;Bsq-0Q+Q4F1-%2`sR?JjfW7(V;9UV%I,jDUunY+Audj.$w/7f]B{XGu(UbS29');
define('LOGGED_IN_SALT',   'Ze26Uytt|L=l;8;I6;Pv@bS k&=@)q./;IQ8XdeUPpE#X4MRcyo[>@~Jw`:gYxsw');
define('NONCE_SALT',       'F)#|C)Osql|EuL|G118ZouV1=D~33oOxbU10z_|Q?-s p_;G-V]z$n^2XL9+$VW6');

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
