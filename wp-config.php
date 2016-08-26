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
define('DB_NAME', 'bistormo_wp_blog');

/** MySQL database username */
define('DB_USER', 'bistormo_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Ct7Fo59uZW');

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
define('AUTH_KEY',         'MNdW>8eG>;2)<4y@(i7eOJk;K<y*~Fn~6(vgW|W9$W`[5mN)N$:Y0x2i*=W_SZ^)');
define('SECURE_AUTH_KEY',  'r4=|@(*c:s75ox5ZnH]w$;tGAExKF/gCCdkc&*g=yM;_{4072t]VW<;^a^!U?744');
define('LOGGED_IN_KEY',    '/)c}hn}Jc4EB0OhBAZ^*s_I~~{Zst$W#EKom&p/0SNM98L]ljTwz$O@j:wTv8z R');
define('NONCE_KEY',        'gl U9BGr6t5fq=7742zO6TG;E#12Xx _(JwyL__QAw3/fLKA$45/U`%Sab!{E!o}');
define('AUTH_SALT',        'g]DS[JT`gIzXMa?dL2SX5xP&J&Kt7iN!u(hoWfHt2X0+&%/H!xwd4I1VhHDEFYQs');
define('SECURE_AUTH_SALT', 'P:&A3;s@$:K9ZbqQ8Js#CiHW,x>Ln&i`efR<u:?c5/0R:RKq`>jgbtXV|;%@7g3d');
define('LOGGED_IN_SALT',   'rQABY;!epO04)9~c-A]LlS?O5h^c#F6WmVt#(9~gb-_NlJV%uYG0LKl$2FPrl^yi');
define('NONCE_SALT',       'zI)1.=f.~s[3:j6S&X^.y, >>6[lj0?Blx+b}X70{FFpSy!H1?FL5^|@Q]gEuqFt');

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
