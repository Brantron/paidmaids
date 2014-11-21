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
define('DB_NAME', 'maids');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'A-zx@uPyNIPQx#4OLz_N1cORoP`M;ZJIZ!ti<=^!YG;o=)a|f+>5YI`s0Z)#`-wn');
define('SECURE_AUTH_KEY',  'pHF2}+I^_N-3.GN$|VnE]T!7v9%L7[}B[|1KQfNHesnD?*tBYNq<dc,J0=*uu-!M');
define('LOGGED_IN_KEY',    '7nVP7RG!1^U,7!9Xm+1UM%]r1]wMJb?|?OB`H*wz!#=szEP3Q+VE<!O)5w>[81v%');
define('NONCE_KEY',        'w[>l+4tkv|Lms(&54pSH:#Ygv<<)ET7nv%t&NPZRu6iw^IL`e-&p7f]`:y|TE ~+');
define('AUTH_SALT',        '*;-yeI=wtf7z~6FU+wJ5w[N6&]<A+DVcmikOZ X6I f!x#Iq(203l(U&RqTC_s_E');
define('SECURE_AUTH_SALT', '&mi^e=&=`K[fBl9i+nb-8g>]o=~trukWR]#!83M$-x8@R`.Q2q)6B4>{~Q,dh21I');
define('LOGGED_IN_SALT',   '<s?@YS!GAQ0| _~||(H>A7-GNP[mZgPNxt%xz}wHf-<_ 574#kck A$Y9o_J3yAw');
define('NONCE_SALT',       '=<bSu{-C:+8.iKHrL2aqCB/[`S<-vDAQ9z8wn`wRj GdM:ClE|ml1+B2CaCkjK4z');

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
