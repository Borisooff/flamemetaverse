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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flame_db' );

/** Database username */
define( 'DB_USER', 'flame_db' );

/** Database password */
define( 'DB_PASSWORD', '8LnTGVXEmR' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '(A=XC,9,$O3R1kpOeW!3rtbJ=:;qcXMv_p?a.QW>io^MFD)+giorqS)tH,chq}h1' );
define( 'SECURE_AUTH_KEY',   '[:wvm0ph?.sBi@7h=D|.S^wIaqo!`#jFv7U5]lKXJmJql0JdMa)]Af*!sT1<?LGt' );
define( 'LOGGED_IN_KEY',     'SD#2`|F@/$Wxef7c4;qSQ<R)t4owk9HJp-KzDX83qP[m((.tp$GjWO1p,{.x8-bQ' );
define( 'NONCE_KEY',         'yH.T++%0WAFxez^}dR|$VLBf!Be*eIabf?@w0J2i_Bg*7]^v^?S,2oa-;ZC:_{si' );
define( 'AUTH_SALT',         'K=95tZ7-YZ6y^6=SuiwQ+-8]C:}_|7s_u[5}-XxN>nZGz8?LS<Hh*9#{EMy5FuPg' );
define( 'SECURE_AUTH_SALT',  '}  F0Y}-tSl`K;7OTL`;ETKAj~P*b|u<4sB@&hz]h.YhIDY${vt:d$AA0orTLiS1' );
define( 'LOGGED_IN_SALT',    '16iWppq5kW8{j8kZC8$BRL9Ij!G~Y ++wnHV I%~pS,f`fF,Papk6$X*T{:erNE.' );
define( 'NONCE_SALT',        'O(Kt?}QVtzjc^m{?+-*FJ:GXOxrdgCe;bntd|GKT/D^4k*MS9<1)8-jb%@!PC%-F' );
define( 'WP_CACHE_KEY_SALT', 'fC)O&UxMKE|~)w_xK>ByGW{[ly}Icl|pI!%OR<K&{ZMSy)v<q;8y8PEezkOaS<eu' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
