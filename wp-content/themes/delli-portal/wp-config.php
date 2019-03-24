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
define( 'DB_NAME', 'delliportal_db' );

/** MySQL database username */
define( 'DB_USER', 'delliportal_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'balcony@2019' );

/** MySQL hostname */
define( 'DB_HOST', 'delliportal_db.mysql.dbaas.com.br' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b}[v~}D6IzDH^YJWdm*m_5FUc0l&7(lCh@0FbFb4IRbU:@ezFI#);>I#P5lowS]s' );
define( 'SECURE_AUTH_KEY',  'r$<2 8S^H-};ynL^u1e!jac3Yr|F`H!gh Kx&<$np4~QO%~8}umXa/[=Vs*6@VAh' );
define( 'LOGGED_IN_KEY',    'R ?TNJT?QMziHM*S_L-kP8Khs{q!6zX9(D,_TJiOG]Q0Bxz 3Xy0jcBzs|l:9q+R' );
define( 'NONCE_KEY',        '`P6jpTGze@EEn%4/@),7s)sBlm::)$> ASeOQZ-];)Xy~*+{hVfWazPDr7l5y|z;' );
define( 'AUTH_SALT',        '08Q$;28(@.baKozHae-9Uv&qO*3e0fn /3A+l,%r0p.88P*XAHpIk?hrRI.hjz#R' );
define( 'SECURE_AUTH_SALT', 'S5D}_?^5z.v.-Op8)x|hdK|;onJ;qF-I!1S2<3?s6(+)bg<<!3%jwW&8#ANU<_}3' );
define( 'LOGGED_IN_SALT',   ']R>QwIngY[ [LzG49^t#`.fl6:faOk+XJ!,fm`axJN!C?A*v74~X#B(-CNcZ^(i*' );
define( 'NONCE_SALT',       ';4DIB& #d9BX+KXT!2YI2,0~Q:2OzKbG;cF(NB/@s9y@jp=r.P69}LflaZa;$sBX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '29hc76_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
