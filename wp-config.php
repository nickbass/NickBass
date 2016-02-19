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
define('DB_NAME', 'nickbassDBggg7');

/** MySQL database username */
define('DB_USER', 'nickbassDBggg7');

/** MySQL database password */
define('DB_PASSWORD', 'xjVSmjPdXo');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'D_KMQu$$PTbioCJNU>}Bf3ehp9hlssGoPXa;2ail69,{U>$Ey$.k4GJszJUYg3~');
define('SECURE_AUTH_KEY',  '}ggh21K~_[OR|m*Eux*_L*jjnBjnuyIPVVZ!VVcg,U9D-_|Wdh[qEHPT+PSWe;37');
define('LOGGED_IN_KEY',    '<Dag>MUUb,UXbho0VZc,>YcLLO_LOWZ~OAEu26Aim6@FJQ,,MQU<o188sw8FJva_');
define('NONCE_KEY',        'Qq.IMP.||NRU>}QU9Hx-~GO~~G{mqu26mpx@$MUy$^I$^hk[Zc|}0gnppw5lps18');
define('AUTH_SALT',        'Pq.HL+@^FIQ^,MPw8sww48s08*_T+~#HG-~^.<P$*IPT.k}}0Y>BEyZd!|V@!|>]');
define('SECURE_AUTH_SALT', '0ULttHKd!SZ..<PP.HL*.T++~DKx~,<<P^.<LT.!!JNU,JQQ1l::4Zg:0ZADt+DDH');
define('LOGGED_IN_SALT',   ':{iim;eimrvFMQyyIru9Cw9CKN@|J;;S.#OSW#O{Aq*EH+*!,>Q^,>nrss18ow');
define('NONCE_SALT',       '79Sw@KNVza;Taeh#WadI$EIMT.LTX!Vwz@FJ@^,##O~_[:V!|{;6mq26Dpx$^,Uy$');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
