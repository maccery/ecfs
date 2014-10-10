<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecfs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'nFOW?^ L.2m|:K*jB;eS-@H;rTMb6p_MifU$FaT@)>B#Jo*@E}PK/N33Yb.!leH8');
define('SECURE_AUTH_KEY',  'GB|wTEv26QRLG0.:psQ<>eCO{gF_Rwo`+qY#`+SDH!]k{0(9nqV*s](P:>x17a@i');
define('LOGGED_IN_KEY',    'Ne!l]a4#Scl`uq ,yT~r*i!>0 Fen&?yJcjT4`kf(B+_f8qf9u?9EY8o3YLWAy0a');
define('NONCE_KEY',        '{:#Ds<LrS27)-v4i_S15q?-mM`%W/E@I)s:jXJs1DB7|s^V&O698MXT1>r/%hIc3');
define('AUTH_SALT',        'T+E9^YGB1;syFAF/{j~|Fv`M)?@8/D8NZ6/EPk|gpLYoP_}/~-4pS4JSLmi;AOjR');
define('SECURE_AUTH_SALT', 'rSh|xxg;8`D;QNjn)lWdbh2DD[ UmW=N^VlXP]BzHLH|!7E?+Re05#{H>q,@?prC');
define('LOGGED_IN_SALT',   'inU!F(s|^T^j|E`>c_XrogR/|!pgBX??&m{ZJnrs&aC-V?f(u@Ek_!~N!agIB1p+');
define('NONCE_SALT',       'U7+DE}|m##`!uoI-!&&uz]TA}jT>,nN]])4LtkRficF&p8HdtoDNqtPnQ,YtTj*t');

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
