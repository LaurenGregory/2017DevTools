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
define('DB_NAME', 'DevTools2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'hAzIPu($1J3`Km,;qPyP_eY9/7ja GubOW^KHk-/l2n>6&zk+:yPrPD.k,_e%(4O');
define('SECURE_AUTH_KEY',  ';fGd1?{u[uxHEvpgvUZnTzN/<ua31O%2)Fr`hpmthhC!5EmSQGV~C$#Ss088{P3V');
define('LOGGED_IN_KEY',    '3D,T{znd_/[ ffcXI i#Ks3=f50H|XE?p1s-U?m)ql7L^<$_EuTOI4W&nDVH;uV6');
define('NONCE_KEY',        'z+@1iwge-nOlaV^L=fj9g{}Q-FTWDEQHWH;;YKSv=<IeIxB|PNaO=&,zDVg] L<u');
define('AUTH_SALT',        'sdLem8U2b0sJuWdoL8L[_|T8x2~(,RLpD*0,%=3v:Q*unI`0kj.}U2%CFs0le]B+');
define('SECURE_AUTH_SALT', '-LI`DaQm<.**`Kt0ij|k@ef~&~Lt;k~{9h{@W@K[CC^kKp{6/c1_-%Y94v29{=cs');
define('LOGGED_IN_SALT',   ']*W-(BDR7k sQN8FM<xVA?tuJn]hXyl6lQV;N`dH_|oBx!-DhA wJ O~483[nIVl');
define('NONCE_SALT',       'QF,h(rmx04LPqdnra{}[X`p4&]5Khw.(VS*-U/kdCn6Ok&_N:AuTb`*klD.=&>-5');

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
