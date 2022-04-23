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
define( 'DB_NAME', 'tapchi' );

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
define( 'AUTH_KEY',         '`SB!T+:kZQ|jx~?:6[~KrSjP`|HEeo8_D+S,a:wqjT:,XM(OUHa,06_gKay+57&}' );
define( 'SECURE_AUTH_KEY',  'L3]P0;4Z{-fQ;k(o!Cc~ogpOD<zom^:eS7$[bpjQwjn0WhQ$Pk|Ub;A{kJW=NxU-' );
define( 'LOGGED_IN_KEY',    'iJQB;Ij7^3Fo%JPC6I.-#X<=ovX~4y3]9Jc4~{g:a6-X{0M>D1$R[R0cTq@*y2#y' );
define( 'NONCE_KEY',        'q `RNWi&I(kZ5/++Os3xUN>G5yDjo3Ny&~B(A85&W1]a?Tt1/V^i&wK?8gcp;;FV' );
define( 'AUTH_SALT',        '[G8^?X]Q/jA]?)pgng6aXwxC{o_5KUT{GHe:WFsZTyOD4?*WfB[U;xy6T5B`L{%k' );
define( 'SECURE_AUTH_SALT', 'myf4k:D.>s4p=OH{R~je$MU!qNM>.jZM{N*=9K1w9AE{_Tx{?-K8dA`(bC-?1bi}' );
define( 'LOGGED_IN_SALT',   'YVc] [AD>R-$[01emee%P?J#!%R[fg<]Jp`fa]A.&>`T!t.}d2Jw0~!j~$%yJ^>,' );
define( 'NONCE_SALT',       'r[?sqR2F`MnxvHF}[iO-7SkD-Ok^|m>~n]NW+$<mKj Wp1JbQ%6j)Kwy)kA<U=Ml' );

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
