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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_project' );

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
define( 'AUTH_KEY',         '9}Jn;sNZQ>d}qa$p=P!&bS[<OmO@r/,]}{s >LrWAGcP``?S4O@WPGL]^D>tSb[ ' );
define( 'SECURE_AUTH_KEY',  'god!< TeIPR@AAU^)!:?[uSAb1VqOJ7O7t-msU9&|~6_43R$-6Dz6h[P!dghZM1K' );
define( 'LOGGED_IN_KEY',    'Q@DF7k{)]|t<xf$.$*riEVIoC|[ILxV^d,VO@,6AE`:n`EYBTt7A1dAOnNdQ/5_Y' );
define( 'NONCE_KEY',        'zAGg:O-ATH0@NtI,wi3^U/::;]!|!x7IpBJ^a[H5qYWPl~xn(f6-idx}z*.NMPn>' );
define( 'AUTH_SALT',        '$B8/zZ1SP$z;_j,[}5jul%5m#3O@%|Q0xgzU~X-#8zicD},e[osQY9@|jEY}R%Mf' );
define( 'SECURE_AUTH_SALT', '9>ZIjN  Ub6aL1+@@.Qtvm{Q0ryXnJJ5J4tt nMYMPDYrDrwV{hBYZK}R@-Su07l' );
define( 'LOGGED_IN_SALT',   'Mz8X&X;z +gAK[>Q^N2!fiS&Sj68i{#+NEjr@298feTpLNJ3*@$Q>x2r)3>Z $o,' );
define( 'NONCE_SALT',       '5*>auSX]+quUgNmW9aRqwi2Pz:4g]zTPSY4YaFwv>Dhxh5}=MPRa;lg/!`B]~kiP' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
