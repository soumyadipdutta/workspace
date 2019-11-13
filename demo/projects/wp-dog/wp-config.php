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
define('DB_NAME', 'id3325414_barkingdog');

/** MySQL database username */
define('DB_USER', 'id3325414_soumyadip');

/** MySQL database password */
define('DB_PASSWORD', 'soumyadip6586');

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
define('AUTH_KEY',         'yg]j_90nIHc8tzwtx[*K}#T;0w}[.d+J7a,Btx.5)iqiYKz5=(CsT`(x5_1|U_5}');
define('SECURE_AUTH_KEY',  'G<TYu~Cm3?7Fct@f<1cxSP`3CC`,Lv{(_]CAN;n)o1k{Cg.$7p))xPwH~V+^o+.|');
define('LOGGED_IN_KEY',    'qGrt34#-g@IIL:se$ks~6tE+HG=~<@?;69ntxCKCiF{Eq-#?+^ {`y0M1UF-1WL8');
define('NONCE_KEY',        '>uc3:&aWmkwIu*QuvlTmrU8C78G?zrko04;Q1e_oa/{%C)kf;PxeJ8KKZFp8$d{/');
define('AUTH_SALT',        'HxT(4UwiDbeQSF@.?:?*Q7rMTERl+>4a#^nB+ZsdT1BY!.mWyvst,#t^kG5MsXB^');
define('SECURE_AUTH_SALT', 'ph&cqpMU|:_!w!W#aZ.gd+HkwO5uW1%=u:;]-OVnZ0+M&xiZ~o{+Kc!|4T3UJ>8v');
define('LOGGED_IN_SALT',   '//TxDN?y8G=c!h9(]{=H9*7.5*E|Ogv.dCt!Pj!|/>t`>PPgVN+6Xn%eGCbfX5(0');
define('NONCE_SALT',       'X51`t.|/Q`3#.a3y{i<9Oa;u>T:T>ZlV[>A}doh@./.J<fzXCLH7Z2kmhen<NN,:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dog_';

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
