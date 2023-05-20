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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'InOn`jVEV5 6Ae7@XUy M2OGCs<o Y>@|PiF&IM2{}.QP.h<eXef;m%SheP2_Ij/' );
define( 'SECURE_AUTH_KEY',  '!PXWtW@18~8tbD2oT~aaoKK}@z>r%tK}&j5~cU&f`%(8s4$$9caN[9yO,#SFM[ :' );
define( 'LOGGED_IN_KEY',    ']mBUBWL1.Yenh_P<jm!x#]t!~w2!b4ezB)*|q:&M_0{LHVYjTG(>&7C|l?<;$P%[' );
define( 'NONCE_KEY',        'RxfvwD!]oHO3StV+2tJRWp%j3aSqtE_:`]*0o[g9>`wnuSjahbr=B#TIYrv6Vxk]' );
define( 'AUTH_SALT',        'q,ER=y3#4D6jzh>eD-f7zXxEZ=N<?LSpYh0lR[x:GB}(Xw3U2pKQ^oYKENL8xNSi' );
define( 'SECURE_AUTH_SALT', '!BnM>{NF7%c/?>{aOu%_B!9CH`8f[j*Xqw5y4%O0@~9t*z9W^AvZWxMoZVf6WJFy' );
define( 'LOGGED_IN_SALT',   '3QvzRBB:2w`t-1h2 1T?=E)Vl|VlgU;5gr|u#Hj67#+l-a>9j+Fl=ug6PIsNaRH{' );
define( 'NONCE_SALT',       '/}cMrboR>^aATR8[f4< gSss!:ln_2=9v7-{:XPS]Hz?RbKL*p[EesnN7*F]-#55' );

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
