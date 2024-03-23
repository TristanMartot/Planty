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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '!17M>|DNt4rHZ<P=T|rtuKD2N%tS}OVkv+!W{/f%IZHSlP+i<EGc;*esi=<}@NeG' );
define( 'SECURE_AUTH_KEY',  '%ZC.P~S*p@SfYw_[D_cDOE*LX9u)FR//EtwoA*wY<Wd/rp-q;A*tD~t?v#ly+1Pi' );
define( 'LOGGED_IN_KEY',    '}%>W/DhIUO.!5X&fp47:J[P4LSW>{rwIp*uHTV/cH5_)dsK!:O&R]I9JK.gKSAqL' );
define( 'NONCE_KEY',        'r;S49N+shGsUZg&B$GQsp/)S{YTVwWQ&?}{V}&wQkmzXxg^edM$/ C9_#Y@/JfuF' );
define( 'AUTH_SALT',        '+6iCNof{<BrUAN<r3#R0bw(N;2])JD] #yCXRq&Ug:RHvn_+Gx`1&=[#g<?)=?O.' );
define( 'SECURE_AUTH_SALT', '3 )SKUKbIU~RD[X<K6$cVBm*ef.*5YXO}M.3/O!aw(dsx3DK3Hx5h/362<GAoxC+' );
define( 'LOGGED_IN_SALT',   'g]FBota&2kZEsem~W*F|GF5qN~(lGQphymq B^@)@/1yGoH;7{m8UBl;sV53xT)J' );
define( 'NONCE_SALT',       '>/:GA/=AXrbnB5,f)0F!ipEp#m@$%>7HS=b$/EvplWBB.gb`$&j&Yb;D*z6faVF*' );

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
