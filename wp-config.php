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
define('DB_NAME', 'delli_portal_db');

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
define('AUTH_KEY',         'p&Il.w^dLkq~l,ki+p3&_TmFr{7/YA&@.#kp%_#LOS%r%)yG3KQGG~n +~d<g[}p');
define('SECURE_AUTH_KEY',  'S.uUwY$,xM~ =m3$! q=~NC29Td*)zf`uJi{-#U*pf/fR50FOfmr|zs!Krp:%gLN');
define('LOGGED_IN_KEY',    'S662&sm])QAad#QRW76+.d.U/Akz@ZPqRunPXINPaDws_egz_`;wvDN#(O/xa~TX');
define('NONCE_KEY',        'I4&/2pV^+]Gy~_o.QgKJWq2D} j0[L(;8$5cb<rKAU-]J@QTU-hFJ#wsy$(g<~je');
define('AUTH_SALT',        '>4ry*-t{$n0/2{%@?4(odnee#>;L24yS09DUZ-e:]lWOwh+,N8Vq6@7Gr!I ElWj');
define('SECURE_AUTH_SALT', 'QV.>83Ik=RK}$jNVuEi/{UYMCY]6;|new`iei,>i1e5DX8g7WJYBdzJU#]M^7(0y');
define('LOGGED_IN_SALT',   'I{M!fCfy!uh6|hv[c4uci^V<C#}>q?&Ti2|}>s=3Z!i5aIt%63*wXU 1AUMp/Ns}');
define('NONCE_SALT',       'MnZVyWw6IK7Gk=E8;0yJH1:;3[4T;NDf~b-Z=1@Iyl+B[_ /HI1rdI>1vf=APr8l');

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
