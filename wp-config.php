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
define('DB_NAME', 'promptrsdb');

/** MySQL database username */
define('DB_USER', 'promptrsuser');

/** MySQL database password */
define('DB_PASSWORD', 'promptpass321');

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
define('AUTH_KEY',         'cZ%_)oGuMG;fHdYo>UCQ#.odkl--{^6.).J=QtA.~4MsnU%ai}C,DTsg;]j<Ivb*');
define('SECURE_AUTH_KEY',  '<PQ+@*R<&K`6EaBaL!]4W:TB7(V}KjFou:td;CG,4ORF?C[PA5zUJMtK!FrwWMWs');
define('LOGGED_IN_KEY',    'N^:S}D]BkiYo!Yt09X~6|%ja<fxiTQzvQ>e5K|G~_DS=j1wb:@web-B!^LGmnxlO');
define('NONCE_KEY',        '(]5dpe0Y7ezVmJ%?{|3TG1/Y+H@~pmrapityV@[{{.B!zqzrC_fnC5q.gK,v3#jY');
define('AUTH_SALT',        'ad/3s17S rPSrYB(T~R.eHmYF*ylcaH4vpVkhr,HV.=Z5?PEux`DMjD4)WF zxyZ');
define('SECURE_AUTH_SALT', 'Nn@sg;i?k>]m%r97im42Zd5LWju#rHU_u;sDFgXTjq#dH5(Y%?<>Tt|#i.5?Ouro');
define('LOGGED_IN_SALT',   'IG60V+b2j[gkXp%|Dh[EcU0%c|Eafoj7-5Mu_Lq(r$x|O{vE;|b%L&&_)p4{/?0-');
define('NONCE_SALT',       '`3 $c8xx>P:YtB5072h>+myBf/DlU11HeZi$~qwliM`.01+bzPKlzjXo8Jx]PV^#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_prs';

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
