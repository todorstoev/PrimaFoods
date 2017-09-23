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
define('DB_NAME', 'primafoo_prima');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.17.0.1');

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
define('AUTH_KEY',         'ItFm4RL`Kw3BSe3Tb_:}|Zv+$^.:eT!H`Q-DzS-a+{Sx>AXYz#)YFf1vz=7Ac:Yl');
define('SECURE_AUTH_KEY',  'r@=Yd]9BC1NL!+3/|U|xR #Xhx3Jn;>OfQIv$8oT}>0|F!qOOVF1X||A=_,GqJ6u');
define('LOGGED_IN_KEY',    's^,+Nc56Nub%;3R-I{QLW*^uQnu=<6ZNt>G+?d|>64|y=#53chK-_KHl%xEAht|W');
define('NONCE_KEY',        'X6B~e|2S+p76&$8HY:(Bv`hNi9kPnmz6!-=?J+aG!H/UFs^WkE.1^$$%@^s[pJE1');
define('AUTH_SALT',        '$jn4^Fq~K Wn:d[Prm4Tg !FV[r Rg_e:gkqJ|}jwvbHh>Rg`Ww&|iY5#mID#89k');
define('SECURE_AUTH_SALT', 'Q{t^S47H ^pT_VzhmakT-?&zYnwg[9z6?wSw( .S+`UDeAb-ZfE%Np[(f;3-D9cp');
define('LOGGED_IN_SALT',   'nAoYbKzg1tnJ<JHt2P@6J_pX^*)+TvGnSa.0<IlM-zWxFGN~KevG^oN]|}9M?*+1');
define('NONCE_SALT',       'xxxdTLr9KW!+Z@*/Vf9ImiXx,/q)@){lNpfoOa 4.WGtC/eYweD GHg2hRNlx97K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'prima_';

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
