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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'SNhkfjXzzXfXxT/klF9-%EvcI[S_@>:_MvcNP-QCig~E>w|;D~NR*My>Ea@rJ.+E' );
define( 'SECURE_AUTH_KEY',  ',hB}MCi.0?Y{vJ6O}s]t&e/%k^63grHioy@E}s/$*8VJ=X@6AP,6Fs8@CC*i@83G' );
define( 'LOGGED_IN_KEY',    'tj9}BFe9<gWbrSx]kH<luiS2bor&y41)UJuQ=crs4R/gxJSN%2Pi)2p<aI6NA{A^' );
define( 'NONCE_KEY',        'I(*nikcIA!5/NjM@C;y24Xx/~)iCVG=sW#iTlQR)#GA|IuW+ZGx5ka}2IrQd^CZE' );
define( 'AUTH_SALT',        '5D? K(&tZ;auDeS_HTzlfT13Q*!o&5^6%8JC5X-:WD?(O7#|Dzt?z[g5yU(|N>CE' );
define( 'SECURE_AUTH_SALT', '!#q|AB)jH3|BxQ^ *iK`ya9P2:v} |1>~0k5{E0cjQZO+IG-=<uFP_>Z.7nnwi;g' );
define( 'LOGGED_IN_SALT',   'oT#aFYfE2t[Ituj:>}$?U^mK{:OYg ;PcL>dspc<|Z+RW=--,JD@h8vuVV`>>B..' );
define( 'NONCE_SALT',       'YT,VWr0mls?5p_40N&fS=iR-Yd?50!:C_( nJ}*ob%3@@/%:~^2,2up(dQ)tg{J?' );

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
