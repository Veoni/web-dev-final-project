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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'L((Z=+gc n]K/iA@o!Jk5v@X}_5HOb ?=}YUk`rWFO&-5)Iq>ygQeg|u.J#trOF&');
define('SECURE_AUTH_KEY',  '`l<U)vOTw`O<5dO$QH5zn:e`0@F`)l-;z}9|<JZ~`LCm-nuP[UdpLu?-K4cO]y6W');
define('LOGGED_IN_KEY',    '|)&W.NS)dmp<<pmr-qs~V=O6ILz+w^*v~~pf l0eBLs~_2g+|b]/!@&`:!EJ7h1!');
define('NONCE_KEY',        'eJeRS:+T3AwL)EsNs[q:xPgCp^_a]=NawG=M|CT`?P:XiHo+2Nh^,M)O0|#=sArO');
define('AUTH_SALT',        'q1vHT]?{?`eRikMtI4^oi|M0=Mm5IfmX}WyVkiA*x7q $$3#XHrT<Ymr.uIU`^Xc');
define('SECURE_AUTH_SALT', 'FzRg-y?&&|l1 K?Mcv!Bb8Iq[&Jt##@gX@IAb+%ri|BXb]@NvwyrBy0LB=i1Wy@p');
define('LOGGED_IN_SALT',   'J%<=O< &[=^YdA{OZAKKAKUncNU!@8o:S}.O0r*:Gw{.QzXW:2N=v,1XP`=^Y*N*');
define('NONCE_SALT',       'G!vWnkVNqb^Fg;yf:VYW@N8?k  D>PFFUs_HLL{<ZE}the@`G[c0oeQ(?-h~KnXs');

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
