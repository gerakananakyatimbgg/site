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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         '$_EP3PC7Lz~zvyvssz.cBr;c8EHAcG=Rb^5C92Y>HwuCc-cjuI ,*d`XxlU;!^zr' );
define( 'SECURE_AUTH_KEY',  'B.fp:2_9W<X` :o=,q!q<=J>m$_lQ?j%?/`|lZ;T.kvM_F3Iru$?}mS6fXx6y2,q' );
define( 'LOGGED_IN_KEY',    'w`&k~N=$Vl/yp(j9xW<>(.zdo/O3CQC[~;bPr,%fX.mtVSw_` ^j{,fu7s}4Iu} ' );
define( 'NONCE_KEY',        'U$Ws|;Qc=Vk0=&28Hg5h<j X*pH8`HyO:},}jyXERqvS5:?$}Tc+:5Q`j)hfJqa%' );
define( 'AUTH_SALT',        'g{lRI9!<,*Wupd:0|F!E$n8KSf]zU0Gw-kK#xvVw DD<>&MVHHBY,F>g&neCKFcl' );
define( 'SECURE_AUTH_SALT', 'VV0TDXWgTrTCw%SkI@}7|x9T[77OceCc4Y^7C[U5m#hfNRArV@>6<}zA3L>u<#Io' );
define( 'LOGGED_IN_SALT',   'PXne;>7:Y3S+dDx5GSiq^(T#6A6;X@&-2-6eTpHgVV[4JTkB-+p!42J@<%<&N,:R' );
define( 'NONCE_SALT',       '0g:<#p:hv}mI(/ACH@jv~>];>o^bmX4~{9}n<BDFuj1_HdrzCAve//5L$/6vLf9T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tel_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
