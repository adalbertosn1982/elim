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
define('DB_NAME', 'db_elim');

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
define('AUTH_KEY',         '4uzE,?V}-b2`=vl8w$I`i(JYACQd#g~Jbm_k9t{8)g06EjZ8E}ltZrd|>kyq(Kf_');
define('SECURE_AUTH_KEY',  '^w)}K{H4S?}WwuW:)RCq;#:WUow#}1:{s]yJ8W-7ym6G-NIQnhrXTLnl:Zw!nIAs');
define('LOGGED_IN_KEY',    'KiF z]kU+@ALmKqd;d+xBZ8>#O4ag0C9_DaJ)}qC^*7n~*^!DzsL~rlNDeud%jn0');
define('NONCE_KEY',        'U9i_Xks0l(o>6N:3%)B^l3]rMVN~h.PBqkOL{H7R,j&jbx3g/E?_3A?T{32~50P6');
define('AUTH_SALT',        'UF$GQH Z/|7Gh;@jL0ovaK.]hFvu0Dry;/*(9MU]ZD89mAECriVP*Hgr.=G2J0IT');
define('SECURE_AUTH_SALT', 'Ld=ABL*L-x(i/-mjsw$$KshO/02}[Ab>Hlx&J4Fa_@?P$i/-8AKHgh!^f@1_37}F');
define('LOGGED_IN_SALT',   '<U;$RZRZ :6n{5a3aYC?Gd*15Q#:Wx7O,X](S,^#-6`@/>Yb8f-,E)^GoW>Cnj1&');
define('NONCE_SALT',       'ViZE*)ond>~3b?%3V 8K4JevZKCHB?cA MBGan|_dLeq_5(y{3G}Zr#lCqeMFj%{');

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
