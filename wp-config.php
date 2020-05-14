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
define('DB_NAME', 'ckek');

/** MySQL database username */
define('DB_USER', 'ashshaosh');

/** MySQL database password */
define('DB_PASSWORD', 'JHiugIUGiugIUFiufIUFuf8y878674IUGIUgiugitg897ugGF879t87t897tGiugIUFi');

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
define('AUTH_KEY',         'T3!%Jkz}P9KN%MLQ1!rV+RO7MLVYZ.=E~<Mr1EaP58}w5jj`unEIY{zc9Zn=pR^s');
define('SECURE_AUTH_KEY',  '~VPM%}^.[FM5Q~XshUi*^_)*vzwn+2IzJU<62afVV2c&M]}s8-l(8|%^aO)%[?M_');
define('LOGGED_IN_KEY',    '}X(9FTh/<Y0=o}C=0cVux.VZ -1+38K$0fsvhCC&oMyRpx1Jhcl6!E]me.:vsvOD');
define('NONCE_KEY',        'Plok!0GK55G-vR%|m,Danmt0@podJ</DTAcH]vJJnOzI}a}k)nID?+(DvVs=nZ#>');
define('AUTH_SALT',        '#nY{Q>i-Zh*O:TvN|AFoYd4RQgH5(yx<K}Sgg7A9hYkWO[zK)LE;1&J(F5xm9(lN');
define('SECURE_AUTH_SALT', '[bWkj;b?sMWt*7/f)!hx7O]`fNCfPcnJ<GR|%_rWwWYO<9Ea=@CzAa<%Pr!S3zkQ');
define('LOGGED_IN_SALT',   'H:Y%W: 2U2~rXUu0zZrB:l/mag]@5mW2`5bM@ EHg;)s<bQ`MCp:][eq5Fku5u[>');
define('NONCE_SALT',       'HEJ2xUSRPKq5Na(X{BDDgw1y0E:zyq^ZZw1gKw$*if2fV~+@PH,1n</#o4@8H0sR');

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
define('WP_HOME','http://ckek.ru');
define('WP_SITEURL','http://ckek.ru');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
