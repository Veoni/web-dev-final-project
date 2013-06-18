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
define('DB_NAME', 'webdevclasstest');

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
define('AUTH_KEY',         'H3od9+fT2c?C&:r[6NPhJS:2[Rr|-FUrp!q8b>@kd6%jE!;Y.dx|lH<${`j+`,Lt');
define('SECURE_AUTH_KEY',  '##7l9V^KSP*-$!$<I[x]<QN{c}7]NXEJI(?W9;P }|NzlzcCXd8sE0!$G*{.y2st');
define('LOGGED_IN_KEY',    'vnDhaAfevJ+Hgo|DN-J{p;t>BK$u`$:TMn!_-rZ8g<+2~9Y_v?R|u(a=[fbikJUZ');
define('NONCE_KEY',        '&S*$@8/~~[ECgDG%po3[K3aET9l79=)H]]%%/Gn#z=-CPV*NW$m)jvY|XV~Vu(.d');
define('AUTH_SALT',        '< o+*=-)(1uNz VEc-E+8c4i~As~UHAlly_iHyv#.+vCKtJq|h)F{uKxWP)50eU%');
define('SECURE_AUTH_SALT', '8WQ/]S| P~U,fI%)~|H;bh-n.3.MQ}qk0a/P.jb]_?h0XQz5GJ;r,e((i+<ASO&=');
define('LOGGED_IN_SALT',   'd)5`TRb 8%da|~I$j@}R+..t]d[7&mapD5[$B:HA`,0t`[aj,UkVQ 8blUa$XiT?');
define('NONCE_SALT',       ';ubx2[%|. BuiH<Ph8_{LM(^8h[* 0;Z|vb0}qM#|GN.78{=V<q~2xClDuX2m763');

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
