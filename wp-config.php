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
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'U|oq&.Cw%,GvB_88Z{&5 {}qIXq0qrS2(T{)G^n:I,Ta0w-z03z[FJ&|pUZJO2g$' );
define( 'SECURE_AUTH_KEY',  '7>wzO[Gemc,44K:9hA-xJZB;Nz5`5I7W]NslwR=EnmR$<%oj)i$K%vz$kUW1-NWd' );
define( 'LOGGED_IN_KEY',    'nR;<]lF-N]feI<L_gmch?(@B8tW|WPYB_nM*zvp0.2=VDm~*Jp8ol_;:qZ5jOeo=' );
define( 'NONCE_KEY',        'DqkVB>;XwB}@kE@MkDX-=WK6V[d}#<]D/oA4bJ`Y5ja#g1?-[R_`m)`b/;:Re2^#' );
define( 'AUTH_SALT',        '.#y=QHYEHz]X@sn`-R}t*;$_-Aqg&SB6iz&t)bEqLLCOeJlW^R-mP:lQw2R,8_ox' );
define( 'SECURE_AUTH_SALT', 'u<%SyK$+o3e~(:]uK{aeG-T|RZ&mG<e{k0t0V=jTJnS~r5CfUGR0Y*{$R~WB2N$X' );
define( 'LOGGED_IN_SALT',   'bd:;3=X[D03H>fV>ca%-8W[Wq m5IO[D}|*y^XhAum6GLo>[D-XmYtdX<(b(gTws' );
define( 'NONCE_SALT',       '_+7su1%gMt_1(}K@4l=yY4E-uf8cJ,/%k!wW,E~>bW2R)!$o~q,Owz9U8^3{E|[C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
