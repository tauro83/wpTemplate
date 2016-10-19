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
define('DB_NAME', 'wp_vy');

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
define('AUTH_KEY',         ')ma#tfSPytZzp/E*HKMoCVEsH:ClWNq=.WrJt0Uy=$iN-U#%n_a0lC(-]Dv%+7> ');
define('SECURE_AUTH_KEY',  'f~J4P7p)A&`u1HT8JFLtu?C::2[;[}~bzCgyO]#IKh9_}C$E<ZE#qmz_(aLaw-3M');
define('LOGGED_IN_KEY',    'lM083Ld3)h9LP[;EhPK=;(0el5[+$NTyVpy$?yLdG5.XI*Fuy, cE0&[m#^2#RV5');
define('NONCE_KEY',        '%e?EjI>K7yhSvHXrt/g1P8M#oomco$#@KXJ#,?|ns)dkdVGy:e6Hdk-%a^Zrp$?F');
define('AUTH_SALT',        'cbC9eA?P!a_C[^>m(3eR= HMn[zUd0ic|@OCSV#P0[L#<<rC)>gH.# xcM=1kC*4');
define('SECURE_AUTH_SALT', '.D2Qo:tP4|?=eqxWM`A?DaHKn8eY4sUjc;.zg$>.er[/gFNDx;$M,5wB/OYgPJ)z');
define('LOGGED_IN_SALT',   'q-IB:!5p<~xG_EICY_Shq~~wZxG-uN88nq#MG=/~BZ0fy#js:!6nPE^WvO)}(n1D');
define('NONCE_SALT',       'YMpBn<*JW*vt=[~c_C{H<t3oN{z0yZQgE+;1GSwm(YQ]3kAWhxF<z`{#02vW=Kui');

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
