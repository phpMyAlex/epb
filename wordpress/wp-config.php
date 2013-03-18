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
define('DB_NAME', 'wp-epb');

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
define('AUTH_KEY',         ' nz i-q!Ut7|y7lwdFEL*Z8+aA8y9zt5$f+znmbMFq7BT^L1G=<l*JrF1FA$-4P|');
define('SECURE_AUTH_KEY',  '4Dp/(HSkx=]TYd!U5:_Ro+|7<w,E_Ydnbd8AB%F}fER[/|dnV`M.m:ObppilIyP/');
define('LOGGED_IN_KEY',    'R.{-zxU Nz4>[7=n[Y^5Am5xOJ]8U8K~Dk<Y(S,R(h~zS->2VsyAl!27%E)|-j`w');
define('NONCE_KEY',        'dFs>vi|v*Xb8-45gFi!9zxO*eTuhr|W7B+/#aSn&dFulSZq#X[bKY#@t?(]I90M6');
define('AUTH_SALT',        'T}Zy$8C@^aMXpTe9[tn-`$z|8IpBYJ])P%*&{_oKAfJV$0#-k+6Kx]SdwpSVt o[');
define('SECURE_AUTH_SALT', '|CLUp|,^&N&M1(AYJ%N0+=GaKn`J*%}_huKN|u~D*R3QB#lzdVQs.A!):DTv=01M');
define('LOGGED_IN_SALT',   'Hiz#w.i|7?(iG(cAPxc,4-A6+O*qapNx6.bp73jrWb;ni^O:C^cUdNQF?UxyBw/#');
define('NONCE_SALT',       'gH6FNyD}!Vq^w^[NsdHFK+}?cxriC%<y>9!e+_op24fzy?GjYggFvLFQ4ljm]Au7');

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
