<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'menvic');

/** MySQL database username */
define('DB_USER', 'menvic');

/** MySQL database password */
define('DB_PASSWORD', '87188718');

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
define('AUTH_KEY',         'CTU|?=`POI#:3TEhb >4p-SSr/}{O{hA,_)*%5Wz5|aL25*OfIlP*3h}1K$]k<|8');
define('SECURE_AUTH_KEY',  '2|.HlzY?6cT9aPjl_Oj*ZXOnID}A^++/#ad,4|:{s={)wI:oU53+ollhTBJO|f|z');
define('LOGGED_IN_KEY',    '.U2+>Ih:.`#Wg<: L6Y#-,bZlRpgyjFIxI%8%v3k|#b,%g?|v7}sKLc[n&f}&HfF');
define('NONCE_KEY',        '6.I3N*~ R]$E$ `kD4>Opr9i#Bkf8Ic9wpT0nb|o?ST3E!2LkO(2F%O5E-+8zwQ/');
define('AUTH_SALT',        'xgX$8|+GDl]kY&4]=fL$<7hW&-mfi$B*t}4Sl5vB._Qv{+l_e1mEN 05f{<p-1SS');
define('SECURE_AUTH_SALT', '+>S`s}j{^|C 6`O=/ m,6>@@:8-m4|i7^7@tP$76BYtxw/#LeeXET;)@kZ^}sbLP');
define('LOGGED_IN_SALT',   'pFarSA;q{h5|eJ^{XmaV-..(%d`k.|;0(W3s^<=mGT?_F5#-UBhfo9|336v-^Rq,');
define('NONCE_SALT',       'Y(uvW5Qk|jJBe^j<[SJfz/V|w}$93(:PJe%|A7%@tK#pLt?eu(P&-KjWJde>kXh}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
