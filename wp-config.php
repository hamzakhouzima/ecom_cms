<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VnO)TEf*5{ziB7Dr?K39X_cc&fAo1]HVL(8:}4[Mi^=dKwK?^w$@O(m-Q2z;Y[qt' );
define( 'SECURE_AUTH_KEY',  '9?gl<0^vOv )O#n!~I_K^8Y)n`PvS<<C+u@,D3 4tvF+6B:F%c62>ZNEI{$aA&GT' );
define( 'LOGGED_IN_KEY',    '/XY$+qX*U3x/y*6%LyG^VD+^kT+*mba99MZ2nMM!AFkBwWKA/82L_I3MXVokN,z?' );
define( 'NONCE_KEY',        '[J7{~T2q|HQmzhS7HU;z7zFE`ubx-DVlU`NmI9,+Ao2/{%HBo!.o//k.&j?J:L(v' );
define( 'AUTH_SALT',        'p;`-@$E@[cCe^:J.%j?!KBHY|OzY6E0U(]opBtTxly#Lw]lKHcc+)jwc<6`!J8S9' );
define( 'SECURE_AUTH_SALT', ' uv:xN=y79,*x`!ILln;sll:s)S|cW@B|Ze@%J|>}yCmJ- vqZB#5$QE(LzEB-}h' );
define( 'LOGGED_IN_SALT',   'f~i&RgkG$b7wQfVG-Pvs]<jio|$$1W11`hD[n#Zk;9Bl*rPgSJ>!/ccp>O=;B5LN' );
define( 'NONCE_SALT',       '@ tD@dr08_.0Y4LLfih&6f/P<^n~u.@9X>eYOUY AJ*:COU>2Y::#8~:fY~Zy-Tt' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
