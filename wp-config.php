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
define('DB_NAME', 'dm');

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
define('AUTH_KEY',         'a[2$Y<b<M7^o<~/tB>o*o!=,L#NyB0tdKHa ]@bNu]6?9sxzqdAD/oHi9#L_Pp:<');
define('SECURE_AUTH_KEY',  'pj{IdM(#h&_cKoR8< O%w07k<~sXHXKO]mDPmd;{t0@kdgAKZa>D/h GfXP8HPkz');
define('LOGGED_IN_KEY',    '4,VetygQ$-M!O;FNCJpqM]4]DE.S{fR Pp7`?=Tu$kO[4tX1]T*oBQN!w^tIS$IO');
define('NONCE_KEY',        ':oV.vv:?%GhFXRtt%MkeKTh@y9-XCoNA:&RZ6$ |i3:>$xtc+.g3Cr~glQ+d@K~Y');
define('AUTH_SALT',        'wmvXJQaKLFq~H+8}I0M^7XD9:aEdd3 +Z8a|#q+Jf6S/aJrCN~~yjPvZ7Fy[UW%F');
define('SECURE_AUTH_SALT', 'SfS<Y4{dFU)`6?uV$4;uIEH,WYR@`-*G8a)-yFm39KXKs~#K!M0GQ?dNR<%.r8kk');
define('LOGGED_IN_SALT',   'c9r6~6zcUzA<Wm;nTWMY?]JRTas$ I<Hnlhw]%^* pX?#GevNi]zRsJ4-Ta~*#ny');
define('NONCE_SALT',       '-1p{qN)tUlN}0rnq.Q@OXxy[0wx`S%a-lN3?-i-F=~Z?o#Ghj3goE{LxUmaNts$L');

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
