<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress_trucell_com_au');

/** MySQL database username */
define('DB_USER', 'myword5148');

/** MySQL database password */
define('DB_PASSWORD', 'rEar95e5');

/** MySQL hostname */
define('DB_HOST', 'mysql-6.trucell.com.au');

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
define('AUTH_KEY',         'x4]Nyh&1 af*=adU;/vw&Lg+Ct?]DP.= -;eYp-cYC(l[Z.X<kB&_;!B+. Ww[Ic');
define('SECURE_AUTH_KEY',  'UX5V/,X2T9#*G_2XZ+,rh--z@I%{xWmiA>04|:Y#-+Rr,1/qNFe4JeZh>#Yd|Il5');
define('LOGGED_IN_KEY',    '4$DPzm8meNv1iKV/_X}|Y-o%px#&Ne|$D}}E-Q2!0As79dKqkI=HxC+^>W0{NsaV');
define('NONCE_KEY',        '(Qx![]-4tBxJ!n=blX5s+%p8tr0bR+/^-g 83(|lGv.~@Qb?#zmwm)0gqPkkfMua');
define('AUTH_SALT',        'dJJ{n8Y|h|-V<h- %ftZ0P5p^0?Kk8,9_2.R/5wY{q]*[z.:{f+Ke|$`mp6K?phu');
define('SECURE_AUTH_SALT', 'y5+=Oyt}g4C$8f<^Dj^};2k ,_pN=?J4:>ZQQ,puGcY{u)4V$caZr)WG[rnH+._q');
define('LOGGED_IN_SALT',   '.Z}%3H|Kpi!X+A!^KhT3-bknCIJd!!+FC?K5;rV@=|N@^#.)l6ML&+q9ZdzHdvcS');
define('NONCE_SALT',       '`hKAegp76#!)idn:l-8TzcL^TW0|mdZW|TfUiLQAPq$T$+c+]]fPi;|YW^zAapN_');

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
define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
