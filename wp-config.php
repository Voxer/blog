<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blogvoxer');

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
define('AUTH_KEY',         'x-d4)nzKf^cY4/v--K3Q|w%J$AZ]+6!OKxF,+&}tZGw`XxWl^vH.:(ZLA&o|?/uf');
define('SECURE_AUTH_KEY',  'W+^D+O51tP+% y-He^N>(u`]gh.|Tx9D6zJoc|_}K.93NDVdCW3)fKap%gj9T<-y');
define('LOGGED_IN_KEY',    '095jI+wn4C3]pj?y{TZr5d0t_wR8)8LI?~EJO-K^4FZ!B@M%!-|Lq8Hs4A$2)xE?');
define('NONCE_KEY',        '5G|TNkCE|.VOOq&BN[2.&|S){&:YUh6L<{FpDS~+u2O&I*P*8X(Q)eFhDfULhoB;');
define('AUTH_SALT',        '1M2+(#R=%d2-n~)+}?T4crQT7<v.puj$?s41=BpHao^W7v^6jJus~9nK&Dm1~iGV');
define('SECURE_AUTH_SALT', '<Cpd1x-W8b&UlR)A23rLjj1Px~#6Uq*L-idg3,1h&DSGCYR1`-b0&ya{M|vR_:V`');
define('LOGGED_IN_SALT',   'wFB4{NB ?o-$nE8pWdxF]}Fy01AzqeyhV4|,G`O,n-;&=,ux@S@%YeiSYS[@#5h/');
define('NONCE_SALT',       '*~[[Qo)Qi6X/,V} |+fKx)QGn.$PNvmH$-A.xupF(I8WV6O5p4o|u0(N5LLgElIQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
