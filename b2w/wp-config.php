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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'fQ98WUvmRnnGF28q');

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
define('AUTH_KEY',         '}h.r9[Qz$=X]m1[<m<,qDK4|l5UJ#_s9AB]GK`MFWNC;^a3O$n1:cvh5_W?y2E;A');
define('SECURE_AUTH_KEY',  'W*j!@,ZoTW+,*Lt-1h8;4%P ;[SL:-Gm=</F42q$y<kx)Ma1Wr+P?|7b6o0X(X8>');
define('LOGGED_IN_KEY',    '8h+1v:yy)`)y]$@r02T9T>b;OCM?bu+E|RXK(-z,9Ke|<b9xaB0Vv?PFQSFpG@,N');
define('NONCE_KEY',        '0t+G>[-Y1hXI[hmTPsMQx S]y-|be=pY*03ruOBvEy].1fn.cz*E%x:i h5V#}m%');
define('AUTH_SALT',        'HlJeNh`KorC_JX_*K>G}T`<d5|dMV XO#!-(l5=:)[x{<Rkll1KOr4x|th5P-JhK');
define('SECURE_AUTH_SALT', '><:`W>}ir3zBDZQ;I^%O[%?wqfvsM|6FpR54jX2(8|F(|4}>%:>It3-!-*-fTbRD');
define('LOGGED_IN_SALT',   '4lv7x*ZGSdK$yRzX+/0lj&tqFxC:[r/QmyA>lgdW ~V+Pr^zO|`*l6-K@f1.I Ii');
define('NONCE_SALT',       ';:hGYmjB]}gjZwn0WDwYv.{DEHLSJx>CUV_].#)NdxccYt%9+`WCU J[}c}FkhQ|');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
