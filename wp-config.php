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
define( 'DB_NAME', 'wp_render' );

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
define( 'AUTH_KEY',         'fh+L@`Q5*.QNTj=7`gNSt[5oGr1L?P ^/E=^;]+|5uEFE[o$|laU.iTV/gr6*>jB' );
define( 'SECURE_AUTH_KEY',  'DEa9in0$fVi}C1vEP*1ul`?6yQ0]p3DkqII@{,84p+ldk=I 9GS%X9HXL-@XH+)b' );
define( 'LOGGED_IN_KEY',    'n4a?#_E_rI*]^=:EI5nG}^RfDB]Zh]< gnjK!ApG&U1kU(P6]?KHLlcnkKeFUZxN' );
define( 'NONCE_KEY',        ']&1 fk>d*S7XaYm#sSfKBZ!^U#};PV6U7N/k7>1mLwksG&|}0v[:_sz}yoz56kxK' );
define( 'AUTH_SALT',        'Kd;4EI:x~*l84(y8xM-3xKmPtqS9<10#&[eH?lMTR^yS}l/i#>l[,k}{ue.u4aH{' );
define( 'SECURE_AUTH_SALT', 'S;c+yMcqSh*]!vle=gEgNCVbuy7FoH:+(PrpdA8*Q(kXSnCI.TNG9x;H.3F0^pL_' );
define( 'LOGGED_IN_SALT',   'T6JKcYDmMV9O.~VU991d!G4{Q3I(<~Bpvr42gv@<zT?4  4&DCV_dS0Q1R9$puSJ' );
define( 'NONCE_SALT',       'W5IzVw76$[EL^0A[W-:Wr{4MDC~X-od=jyJhz~}fp-_<a0D,2VS}#@{:b8{y?0uC' );

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
