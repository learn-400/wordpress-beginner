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
define('DB_NAME', 'tutorial_wp_begginer');

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
define('AUTH_KEY',         '!+BInBo(+Tbi]#92[6OilGXz3&F<1({%-~R7`c+0M+P:+:]hUHN(W!sn<*_m7yBM');
define('SECURE_AUTH_KEY',  'uHN>ILcf8`Y2A[0rjUiWR_@(G<:/w?m{9e0;CHMI^;OFaXG$MVx7z$g@P`IZ5kW+');
define('LOGGED_IN_KEY',    '+ZA%.F.nNOxgdbrPm7nKQ^nx~m~>fhcC3G.AM+=h$-zw8K]y&alNe0pZS,a1mV.x');
define('NONCE_KEY',        'QP:w~PB6_e!m_.N]sTe,at^yi}F9<)]Zx)c/~CuTKF$P8:aSB*]>U]EN, d~=hEJ');
define('AUTH_SALT',        '-)koQ}@H+rluVz}F,Jc1*!>2q#Q_Z3j1tFf>},sR-9!&bRWiIo&wS``[-AI>h=^|');
define('SECURE_AUTH_SALT', 'QlP|7l/fuJ-8t~*YyRI,nP2*5!rzTz=WQv4zQb~ziBA&HIe6/IhYV9)]Dq!=allh');
define('LOGGED_IN_SALT',   'Bvj22V>^o_aW:&DLug=K]BX:_3bjQaJ*+/b(fNJRtz7|mAJ95.) 8P`dt;sOy$!C');
define('NONCE_SALT',       '=3?)`5~a+ny_mXOu$P1?04lvgBh2~^-m)nq?`w<gdNpljo%e#6S|?N>n>D=93jB?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_begginer_';

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
