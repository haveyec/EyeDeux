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
define('DB_NAME', 'toytoy');

/** MySQL database username */
define('DB_USER', 'havic');

/** MySQL database password */
define('DB_PASSWORD', 'Naughty99');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Ng&CFN;J@H+Y6P ]w&3^yo{|AZAZ.1?-EOMFYKp04,D]1Q]#k^/*X[.v)#VQfwW]');
define('SECURE_AUTH_KEY',  ':6i}NA|xy@aeX`0]d(Ab|!|U}2/k>M!>$O!7p4Qp]~F4sb?_U&fT6;_}yNSF8XD:');
define('LOGGED_IN_KEY',    '=8}Yf(~:m&L9c&IcS`:B}i0k`IotF+eB~On%!K``^]0q5$s!4LdhZ5U8`g7pOHTd');
define('NONCE_KEY',        '+5#?$T`6f-Z}Q^($/A-VxQ$7%>| -6! `[h$&$VoVZ[(({PgfG{Yd6o}7@fEna5|');
define('AUTH_SALT',        'yzHEyEa4ZRMTG0^%9XjX;DG9Z>)8{le^rNbnhhL}?Y0o!i_A$68(GQMsx}F35e&[');
define('SECURE_AUTH_SALT', 'g.5o8,-H@?>zoCMg0nb8ruOwAB@GS4fBygXABi N&;+oT#f?+9_1SrD*tOmdOK5H');
define('LOGGED_IN_SALT',   '{P%@]yUs(~8-;O_!DcC`=>o>IESa}/GBr0)+1qJtnej9!{#l/wN#PE7Hl(=?OKNb');
define('NONCE_SALT',       'H_?5T(>9H+1,Jr,caUK1y/[=JH-!3BlFT3b6sKG]h~?3DE}EEhVQQ;W9WIA+lJN#');

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
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

