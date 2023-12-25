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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         ';cdJ1*yT?E8WQXmN7nb1ZFTRMXx.J2#j23ki;hTbo;U+|c{zrll4T r`%qtclyu[' );
define( 'SECURE_AUTH_KEY',  'mF8N%6,<&uz|(S CNB#iJ5Uvoq9JI@[ZvL~JYZ87chFM+YC;$Iv_:;2C,[@#?803' );
define( 'LOGGED_IN_KEY',    'Lv,J5a)byhpK;9n(Fe]WPSu;{ki[Y?%Bb4)?dj&&TLls`zY?!~JK.t%4f_9~A`%>' );
define( 'NONCE_KEY',        'lv[j|uUMM_m2N#cDbl6OxzX`,1[bW`hR$:4H@wCAC.N!$M3}c|YcpQ@18D^!Ml$D' );
define( 'AUTH_SALT',        'I?H-vU`z?@ GA&%ZaYE4w|B;fZt#RBV/Lo/2K=`/]!:}`G{Jm$O&`xp1|WbPenaE' );
define( 'SECURE_AUTH_SALT', '5Er|=I}E1C@c]7qV=+h7Q)$9fmmf/KR^.[Vropz|7/%V S&i){oEB{:Xrf9B<znr' );
define( 'LOGGED_IN_SALT',   '+m#HO gvYIb|I`sIj+>=/LZc%Uw3[/t99dn]g^]_bu-OosdJ6Bz^F(6Ag8(XL5~I' );
define( 'NONCE_SALT',       'J5b5/rG{!3GX9B)q,0Fu@),FP  ZGO:RZ%_X]L~ln!{e.^[)Eg:`5luqQhb(Tf0p' );

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
