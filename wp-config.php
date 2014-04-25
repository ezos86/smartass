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
define('DB_NAME', 'smartass');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Z|%U!|qHiQ3-Mg:2]23s|WQ7{uxBm7 LmS/l3CV+osW8j!Z(Gc0rB%!i/LFPRvjg');
define('SECURE_AUTH_KEY',  'fovM!uP9%q!@rZcM+&1mO#S<c|T-{Q=&,h ,a|W &e)O$d+UB%As}S&i1/-|+ZN ');
define('LOGGED_IN_KEY',    '9z|/9Q1A-seVdM5.:D>JGcupiS>MBA`/GV..QQj&L23ev>.^`_J a^9<Ggq^4C#%');
define('NONCE_KEY',        '{Q)X(sDz|aexoh0BdyVzRR-`-CoOo:Ex||5DLW.TLCVTY-xjx@+kHdfSje-j9W-H');
define('AUTH_SALT',        'm6[`%1?&.a<@i-+lX96zNa0,8LIb)yTG]+JO[l:N9{KywO>g Jr4(E*;M}wH-7z$');
define('SECURE_AUTH_SALT', 'GnSQ-Z Gu1ICz(/E{3Y>,j@ :N-Q1-~D,qf#i^I T /eq!x|Y3j,k@RBKmLq~[)&');
define('LOGGED_IN_SALT',   'q~ [EMwkKT/T5]qsVc1xpWl#%PD$)L?s+-.sOd>B?sP&s@7z#B*H|D0Ugt]4%.qW');
define('NONCE_SALT',       '4-X2LgvAB:.W+H$5.#hmE0gme!Mv+RRw$%g36GC P5(2gg|.OaA*D^aES/>pG&-M');

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
