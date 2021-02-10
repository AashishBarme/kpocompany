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
define( 'DB_NAME', 'wp_kpocompany' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '*;,0oBZbk+04RrwM-NKdy/mQb<<WDU~:r89|x`muJ lIQTImZ>E9W~H xd;[`k1?' );
define( 'SECURE_AUTH_KEY',  'QBg/)G}%<+CrU]ft|Ft>b<`f#!Ru %q`]HJ39M&~(Q k_Rg)h4xk_3XC@ 6A$p _' );
define( 'LOGGED_IN_KEY',    'kD03HF zBfbu Eyu7gnSUy,<t~0Tc>[YCTAK-3|c-aDOshDa3i&KCU!g/<Q~6n6j' );
define( 'NONCE_KEY',        '4kGr#uua,AKv^^of6 =T%]#9^4sg5>!/jKw#7^IZ$jv?Fqu:%a(SLmk)3tUnvVaN' );
define( 'AUTH_SALT',        'U$z=F?kiv#mUtvPk{#0*H9o^-k7wt1&#7;Vq=c}_tV/f(ZO5KR-P=6a^^f0K+4y/' );
define( 'SECURE_AUTH_SALT', 'tCRpMa;^hS+-;XI:5MX&-<k13A5h~vKr> :iqLG5&Dm!E!21%_[R/1k *wFNXH8.' );
define( 'LOGGED_IN_SALT',   'UO}b_{A-^km/8=G]]swPK2}JSaSKn*+U%2HFZWthcl^=MK_/W7WwX0ey6wdQ<-)~' );
define( 'NONCE_SALT',       '.eN9m%e:u{F~${rVdC; 7_5~Kz6EP&27 H%L^Dg$5}&qgc&5f+V6]C,p,Zgl{CSj' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');
