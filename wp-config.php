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
define('DB_NAME', 'blogts');

/** MySQL database username */
define('DB_USER', 'nierokit');

/** MySQL database password */
define('DB_PASSWORD', '170291');

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
define('AUTH_KEY',         '|2>q]LO~1$e|Tni95/IO4)@I&Lty@/<~n{#`ek7@,]n=[B*!e8ZN:s[IxSR7xDrZ');
define('SECURE_AUTH_KEY',  '|^Kj9n+Guxs29OdfK]McXebkqD1M~ F`fE;YRQfW%?BaSxvLxk]Px?ZlM*t#c6*{');
define('LOGGED_IN_KEY',    'q!_i}[#+~!la8QNzZv)84WDuF2R$8^xcm{7(X_*;kCXY,R)7f8UFD?L Y;wKVy,X');
define('NONCE_KEY',        '%=t. q7B4/F.n6pH_ajlTr9I>0_3O*1/omVuEy%N1L}XHiU2bjm;K=#~m+Y<ciIA');
define('AUTH_SALT',        '{Qv,hN{8TZ-?ev;.CFfQ#K||8M4E}Y1aT:5P&QIZy@#yX;JsTs}?L[4*p9=>l4Le');
define('SECURE_AUTH_SALT', 'zwVpKW.jwjpjaU|akxN*+MyJ**quI!j!~/i/E}j_5G/Rm>4m23NIvfX&EyHQwgCe');
define('LOGGED_IN_SALT',   '>o>+f9>r^<]FgrZQ2UZSyD_:|!WpEpJ*6j=#@**uZ8rak~~VVTh>LEIY[9]HR P7');
define('NONCE_SALT',       'Jp`%sf~FQzuc[H6aPv>uv{h2r,nue_VzBqnl^*ct@cN%Ftdw+u?0?_Z0aKW<PAZ,');

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
