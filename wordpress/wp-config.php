<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

/** Attepmpt to fix the memory issues: */
define('WP_MEMORY_LIMIT', '64M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db597780943');

/** MySQL database username */
define('DB_USER', 'dbo597780943');

/** MySQL database password */
define('DB_PASSWORD', 'W0rdpr355');

/** MySQL hostname */
define('DB_HOST', 'db597780943.db.1and1.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wl@Q}<Kh#+m!@cz|wKjAE1<i~ujII9({OFF>&l7vc:O(?2KjW!|f%`|awxT=w(=b');
define('SECURE_AUTH_KEY',  ' o??!_TWs+->=&+kYXvf8(o7Mu<I~O!]8HPk/]yr(A]F{u]=kjo-%T]emb<5B]u<');
define('LOGGED_IN_KEY',    'R}yBRA#meSgr(W-B@z^3p|%nbTjJ1ox/8r?/:PfRf8nt-Pl[k6L9+9ai(KP]oG~^');
define('NONCE_KEY',        'tN)+>viio=Bff%^T `#NW:T$jCJ2Z|+h@bn>y0okM=M-]UUi#Onui@YPMZI/v^8^');
define('AUTH_SALT',        'z+N:=L}`w-T96mb+,0j)f&L|Ah0^/cG!SDbZ/z+>q0b|[55hbQOVhL:`a0o,L:OL');
define('SECURE_AUTH_SALT', '-xvbGb[<(2+zmgrh-ztGF2Nc0/LF7;|lRD]-q ,blwZ<@Jvs4n;nS/(]k;dT0@j{');
define('LOGGED_IN_SALT',   'jn]Fs;Ztg.MV,:hU@C[lTw|4sboA#|[pkqiCs3iMH+L/c=pA!=XLSC=v-5J@mgg!');
define('NONCE_SALT',       'Cq|cTdk@Us^7^aAN$U=o5pD:%qDEcsR. {)RO_`m7VPzv|9D>*C8$^pD67#Nz]3y');

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
