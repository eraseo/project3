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
define('DB_NAME', 'project3');

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
define('AUTH_KEY',         'YC[vMg#Z,3<-$.8$C 6P:D*LJ=rvt w7!iX=qM:<?>`^YA_fu(=U,hRFc}0bF> 6');
define('SECURE_AUTH_KEY',  'n8YdWMmR8etG(ja#uL#2a.A#?k=3P)leZ-SR+i6ef(.Qzjsyl/63N_-K)Qr1/TcS');
define('LOGGED_IN_KEY',    'NqZ//fz~Wb`]deDu/R^95H&M6FuYcsx$;+7C22x5HH=OF$+Hd &TS^-8os,p%Qq~');
define('NONCE_KEY',        '>&G|i%7c!Pue]P$dl/?kb2+Ncx9hWOksI@n3baQQe9ew-v#RKLKf.oD0:tWbE6wH');
define('AUTH_SALT',        'gIP2@+Sc.vaU&-}.1nDuj@uBZe{nN<8QE{n]3@Y/nK>9s)IiDjwUHf]2{6_VYQR<');
define('SECURE_AUTH_SALT', '$wR>kg1^k6X-TUA!)i3*5z)F,8;5p}AF+1&9z8a|<T~9SRHNOErmq$>l1KGs+Q+<');
define('LOGGED_IN_SALT',   'qR$7vx0!R-E~dwm<TIDsdSYRk9__[7#)Hsgs|L[WSK04-i8U-w}n ~t5fK}?-1<d');
define('NONCE_SALT',       'h@YHbU{z%~r^6EM+$6Lwl.3)z;L;#-}nit-{+wH_giJ-Tc(Z^V6@dgtDKc:n+)Q^');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
