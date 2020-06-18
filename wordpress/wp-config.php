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
define('DB_NAME', 'eelbd_eel');

/** MySQL database username */
define('DB_USER', 'eelbd_admin');

/** MySQL database password */
define('DB_PASSWORD', 'eclit@os');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/*Updates*/
define( 'WP_AUTO_UPDATE_CORE', false );




/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Wtp1)x}h/v||:gMCZ37M7j;LaB]3:R@x1uX1,Ch~(maj$9S[kubAY#K|E>8D]hwV');
define('SECURE_AUTH_KEY',  ',0At&L+}*sKuBb/C@&MMGB]-e`D:|w+d&57nZFv&-T.L-eV;J ?&p+XWR09korUu');
define('LOGGED_IN_KEY',    '+%qzuRdE(|;%OWZ3W/DfHgD6MK73q eQaA#hpqU,)rLre@C3V$2<4Ek|H/( Nc/_');
define('NONCE_KEY',        'P,ce4M*i:FXRZ`S$s3+0cQYmBXzN3W{6Fi3 XfsNJDxdWHh[e4!zA<$M^GYdt^!n');
define('AUTH_SALT',        ' MN}gp X1O7nTlRJq7#ja^(NDz;exr4Q+2-jitJ_r[-tK`h`:UR1JvuN~Dx^!BLU');
define('SECURE_AUTH_SALT', '-4@Z&$JEjmt.1dhUNuh$>uJ+KB.|?Czmyy[;fO0Y?NGfDNO}^soo^ |K#$lK w9#');
define('LOGGED_IN_SALT',   '|_Fpu9yT3kpC$*s!#KR`U~@PH(0Ou+ Do#`t$]$z4gy &+D<kzZlNN]+LGijFDGg');
define('NONCE_SALT',       ',J~_j&9Um~&ish6Q&)ZkcPzg1t(FpXuqtoK&r6sK|%KNyPc&@q6/T>.Hb.Tq^WW/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
