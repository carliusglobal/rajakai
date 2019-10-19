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
define('DB_NAME', 'rajakai');

/** MySQL database username */
define('DB_USER', 'rajakai');

/** MySQL database password */
define('DB_PASSWORD', 'raja@123');

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
define('AUTH_KEY',         'sB3x?lahfLr!/QC;&O=_H%+*zYIR>Q8w;9O<VZRhDI_XCPz5BUu.5`S7g0L9rbp)');
define('SECURE_AUTH_KEY',  'Jv<fQl~aJ 7PhOSLOm2UhYlU&T5zVVw1QB~z0KGHp?Z8K7x#+hjwtet|R78?d;F_');
define('LOGGED_IN_KEY',    '8T^^)R]SK#2]B&>e@0rcz=*Fzh~)Z%Lf|,`+%@M=xB^2wWD-=h@R?h<GQW)v&?P$');
define('NONCE_KEY',        '`XV&ytByLk@Qpq|{4i.aL_,8m7(gdzLX;77a5DC&bC!I;Y;9Yi7}Kv+5rTfHa$yB');
define('AUTH_SALT',        '*,IkS*& -FHqL*jkM!GM+TjVB#~fd?!&T(_lh3P##/0,83,&kZlU<,!*<ot/mYJ>');
define('SECURE_AUTH_SALT', 'V!f:=U&qO;|H5NLpsQpi& pDpQUYG2:gy>~pziwpf{),:Ozv@pJEHk]?1uTh*)wI');
define('LOGGED_IN_SALT',   'F!h_pmwDQ}a/_ EvL&d_DUy|xZI9~mD&%jErKr7Xu$4xD]c **exXZA_rJi50#1r');
define('NONCE_SALT',       'R5I>5B(iYPnZ6T$UlOC4b#c=5C3^<!M+ti0Its=3A;wHBFk:qL)_MaK($G-<Vkb9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rajakai_';

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
