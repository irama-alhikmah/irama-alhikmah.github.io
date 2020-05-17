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
define('DB_NAME', 'irama');

/** MySQL database username */
define('DB_USER', 'irama');

/** MySQL database password */
define('DB_PASSWORD', 'i5r4a3m2a1');

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
define('AUTH_KEY',         'HmD&@JtT([6>G6>%4KRR5oI [>k?7-YnAysNcT#.4b%Q(Gd9rf-XaKw*{uVi:2Jx');
define('SECURE_AUTH_KEY',  'ToO!8YO>/*)n$fsVaQiSuI6hWPLcplHh&i,@26o+]EQlb*<TkgVGm& 0PPEWo6iZ');
define('LOGGED_IN_KEY',    'CYsO , RUGqiD~eTE&xK]#3!b4`068jw ,sc72hd?955MXm0~EkQ0(}4pAs-#Lp8');
define('NONCE_KEY',        'rcI;kMEjhrorhS1Z[0d/=To30U/G;1+x3qZ%~nG%`/-Oe5H?F+.K3Gi1q?)a5;t`');
define('AUTH_SALT',        'Hpt@g<Z]8fXFp}?%)sF@)1e4R,_?89Cgz[+0qfDR7BMv(_nVZ-j4_HgYWnMyikQa');
define('SECURE_AUTH_SALT', 'U]IwpWI(3LP2mgW0Xx$k7A;ZES_W&vs[4Dcn(:;IDx_]M3Wh~IpTVD>XXgg:)>[/');
define('LOGGED_IN_SALT',   'MwYiQ;eMwinL2WN5n.WX<EWN:+7-ZN6[amtr?|J#Q6uHiVrjhtGFc?r}jE(T< 9)');
define('NONCE_SALT',       '(n-GZ_{C?)M(@`cmDpMFs25[BVZqI#L/XlbVf+u1$p.gIg54XqGR6M!sC{:3Z_r(');

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
