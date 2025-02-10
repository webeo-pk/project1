<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mestag' );

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
define( 'AUTH_KEY',         'p:7z/|RtA6iY%@]~w1$]fHDUu<gPW4L3_PZ~0=N6v<<G:i!46jb0GPIa!;L_PjRu' );
define( 'SECURE_AUTH_KEY',  'LEYA2lOxzNfl]@sG=69OSqYxIDJ74EVf|)WA?g<f*K!K-Z|:5_4}I_WtL^]fqz|K' );
define( 'LOGGED_IN_KEY',    'OUtJEZrGUH70M0_tZf9~,V1ydM8^envti.uC[z&@b_<3ITM6HC1T>_Uet%=Hp/l>' );
define( 'NONCE_KEY',        'k`YC{K/kC]G<)IC B.jGBn;vR+Op!|hygi1#+Q#kk-SW-#k`R1;0K-)4(za-tFR4' );
define( 'AUTH_SALT',        'il]0{Cq*~iNKm,;@Y}h5ZYGTlgiU?5t`ILqFtT%pydKV]k4sr6<q(}DbFOFdLqU#' );
define( 'SECURE_AUTH_SALT', 'J;8x)@4cFVM=i/0EXjCp5Axf0h[)6Z(9^.y|EKE)|xz+%*T++XMBI+g?A,U.N,%i' );
define( 'LOGGED_IN_SALT',   'MKD<k [Z|1]B[g&lG>>#v569&yv6Z4aS!MnS}alT&A%[)Qp)&L1wEBV05G;|>moD' );
define( 'NONCE_SALT',       '4w(n5%3*+ci~PYjJvtdKEWz7rD|3:]:@BbBB5|@>f_q6%&PR8~ :cuM8>F48Y-De' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '85_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
