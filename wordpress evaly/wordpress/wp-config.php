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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'evaly' );

/** MySQL database username */
define( 'DB_USER', 'hamiddatabase' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hamid.1997@' );

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
define( 'AUTH_KEY',         'F[PH2<!I)9n]c_49>eK3gc%*l(48Ib$i-aY.Gm~Y[]}Y]U%t4LI5q}`tU%ZhVRZA' );
define( 'SECURE_AUTH_KEY',  'vZ?eBWCW?4J-.v4AZa#M6eO&dObwyi)VmSA[<,KW!(/Y2iw,Hvh%&jrKab7Ht860' );
define( 'LOGGED_IN_KEY',    '? PAG%Z;>#]JDX_7#:@};@8E^;ceKefS=3!0oOb7IcVpnV;1n{7bWcPCDX~>H[V6' );
define( 'NONCE_KEY',        '`W<2D_h:Qn]9/,|V]%?lh2eFh[M%M6 w=u<2MySlk{eT3|A_<z{Q&lO:{#oF*5#/' );
define( 'AUTH_SALT',        '3%#J2I*m RESXPi*IIhjRt7^q49oxh{|1438vN%!C^h5VRVTt{HGnq|p~VsK/ae1' );
define( 'SECURE_AUTH_SALT', 'iT9-SrZXCA@xECJ@],5i>bjfZ6$IBmBO~XtYN`iv5Su=xwewTsc=~+F*mm2{f.0%' );
define( 'LOGGED_IN_SALT',   'yb)b%Tj5qgvGk8P&OOM$3#ZNbFbqvw}ulA)nl!:NMhV%%]2Hrrc~5hE0sp{h@2.u' );
define( 'NONCE_SALT',       'mri0pTO?lEeU]Y|aVa+vz^kAqLY}F[CqJ@F*sK[%}pa>b4(&;I8uXI#3 NUt2H*=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
