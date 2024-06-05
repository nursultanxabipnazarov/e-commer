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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gilem' );

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
define( 'AUTH_KEY',         'EmIliJ;IPgGlH+Mk?l]HKR#EB c,Q0|n7ueST->Mi@(Qw]7sUzJBqL%qb>s$do~D' );
define( 'SECURE_AUTH_KEY',  '+5!(&]PT}vp`Vs+r#Y }l(]7+s7A>chY<lEmk<IdT3j_U,2Zi&UoABA <Y,7^wIW' );
define( 'LOGGED_IN_KEY',    'O,$&tNs_1>%!4;4;z(xg xq5FK`&m[``laF:A5pTXdP{];@/{[YkKqAdpR4Vq3NB' );
define( 'NONCE_KEY',        'QGflK<-?N*/_KfrDtiz0sJE.>h=IW^P$-yv]Z~]1G2O3&5%A#W$}4LpBEnJ*Lksj' );
define( 'AUTH_SALT',        '=7U_I9a+MLm%tg{zNhoH3785Qrhi{Dz-^b-]o*fgABtGy)v$|#%B.%!t_FH^^&84' );
define( 'SECURE_AUTH_SALT', 'LbI(gA#`&Q9ux`yKJo,zQjMY(?;R=>yMG6{7D7c[4`i+#X|k7i>#Jb:hO:~(y,p$' );
define( 'LOGGED_IN_SALT',   '(n/O-|Nw;u}s=eTX(e7{$l~465Dk{,g}[6|{a;w#%dRImIm1=DaLo:weKze&ldNc' );
define( 'NONCE_SALT',       'W(8V^?hzc1RknS@f}:(Xx:zf,*D!BBV`%m<u041r`3%<%32*YUTIa,BoF#RT~FIB' );

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
