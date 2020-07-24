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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'ikothit');

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
define('AUTH_KEY',         'L%9(r 43rd{US5o%+!;o9:E*C7Lh#=Fc cvUvYOf hjc:zmnz<~I6/W?Yv -#{&T');
define('SECURE_AUTH_KEY',  'N-3K4mJWP/F.PQcxX3Di)DjJi%(dN5X TAD{.Sa~Ekqx3~L+.GtV$Z+qk7_*c$QR');
define('LOGGED_IN_KEY',    '.07Fvz5OtS7T8|jGv@2)t]n.H]Pe]]tJNeTsEh=Awdx()~X6R>~IKe7%O5agJRA6');
define('NONCE_KEY',        'qU 2|Y7^Ep*c.61V1QLvW]hvY}wA!1]hX#QHN$g|rGEqh{LUiBa3h4P@V#EyTQsf');
define('AUTH_SALT',        '_j!YfA;`va`6L~r^0u>3x~fpVurLB<tT#@cRGLj 8gX`bA[C Wlh3p|e{-uKSCYO');
define('SECURE_AUTH_SALT', 'xc6S![#gMob?lq5$0>nT+0GtJ{/e<2wF(N3GOm+Hdm|TJ1[FB9x^F5}t0n@OM.8l');
define('LOGGED_IN_SALT',   'ClkYj+cuk.;#f,Yq^*X);~FSG~2p,p|q,PJd_nZY-.0jwk6K&*=g_C*3&kg{Q>4<');
define('NONCE_SALT',       '7 tgXcbUQ2Rdr?hHn6,l#C-UC=ow4QYv7U3C#Te%o6Zyti[-ezm(s9[M[_woZEp!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

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


