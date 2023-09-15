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
define( 'DB_NAME', 'nguoidung' );

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
define( 'AUTH_KEY',         '+6_!!07uvZ7x%)0GLyCR,>Q3qD0p,P%4ACJz]B&OC|.,Z)`T:(nEW^@(?7b$FC#S' );
define( 'SECURE_AUTH_KEY',  '[I2VC8qODnI<Jzy67+|TRJ%[XGZPn?z~>B~Wb~`%rW6ImLJy`_ORQg`C|4FPJ;8s' );
define( 'LOGGED_IN_KEY',    '/KYY4WV2nWr;CEUaw|~+tNkEa+/`kK_|xajznUQC.@?OAn5@)%diMK|Dc4|D?VA2' );
define( 'NONCE_KEY',        '{RJMt,mqy1($)l,FYp<##GXip,e{q*O}b7kvMlsuw{zC1TY7caV+%_7owP%mWMl/' );
define( 'AUTH_SALT',        'GiIkGR`:rZ.T e_}dN@QKTN=A]J,2(:cw^?XCw^^I+ <q<hjD;]F3x$#Y.H2c/ea' );
define( 'SECURE_AUTH_SALT', 'mdDRC&BcOQw|_]t]PqwO8!:z19NXv*2zMtq}MvER=Ivc5mE433=hHkMUN2znhf29' );
define( 'LOGGED_IN_SALT',   'A!JKH(yrtCa;Jv37Sl4B4Pdn?!]vme &2TE;Ul!-prU}L_.ahnkdUv+F.b/BM82(' );
define( 'NONCE_SALT',       '>)amvzVmf.EF4*}G)E3@0vN#}!RW6X8h}O0TeA9C;]E}7n9%`45<THEn}<oLBtm*' );

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
