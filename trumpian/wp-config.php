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
define('DB_NAME', 'trumpiandb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')U:1;aocPK~b3gjx9S!(Uuq-,`iy:#me%klGf.b-LH;ooXE0SBZ8JNw3.ZxWy*U`');
define('SECURE_AUTH_KEY',  'ui02n?D9?9qb:T#l0`g-~39Ph:?%}aY$kabs}N.ux}n2!Zk0jdN1/s-?wr$w)1D0');
define('LOGGED_IN_KEY',    ':>{Q?m&YGk}4XP]gQf![2fq#|vDP701?_?@85SDpUTst(xFQD7y}@:OStNl+UI!)');
define('NONCE_KEY',        '3:(=}{N)b`]<E?AmB<+zAQMq5-,K 9eWl&G~ljQxs~nIc|HVj`=<HOn<qG4/i2L@');
define('AUTH_SALT',        'FC%z`*zu,NTGY:hc2{rqZPTM<LVFZ1-X+%Tg8bQF#zywtI430!l:J:{KE3C:n57)');
define('SECURE_AUTH_SALT', '`Da2OsB)^.w[c5Rk]p,]gY6* 7nqEFn2yL.bG4`jc=IMP)9HBPk!o.n;l*/#E%Y:');
define('LOGGED_IN_SALT',   'm.ZO$6|z-fyNVaAyx7>9MrUeh2|Dh-@ ceQ(mp6phcMv$z,{_+;zwqTi`rJRGMGk');
define('NONCE_SALT',       'j)P<,7$O!fvjNnTi{N#drb<.yT* 0Ow%!$a) uM3FeZ#7FzlpYNFFsx,lC|8<qvI');

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
