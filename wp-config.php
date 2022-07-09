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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'matkinh53db' );

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
define( 'AUTH_KEY',         'L.EBFen/obJ/8-FH!#cpvzADHN]82eXi}aMO_x4O-hAi+*q%>+8,UF7MBw{7z){@' );
define( 'SECURE_AUTH_KEY',  'h&N:!.h/mbM41(^]rih);e!mJKL5*bzu^O3!NFs<*}eE|l*+BkYNDHAy1/uS%cZ>' );
define( 'LOGGED_IN_KEY',    '0b66afYbWv_&5[rM{kw`$FYp)@#17Y~tr`/kC@SFsgzlJ@r-Wp$N:7>S}9aE4IOL' );
define( 'NONCE_KEY',        'S`BEdIU<rpU]:tYzijcf<nM<&IH;AGNcmma&B$#<p0TKFFGOB1+KMF?dkwbDGS+j' );
define( 'AUTH_SALT',        'x4u>?j?+#b9[TF.jh d:+Ob]X/+R`![Hm&h^ngL.Jy4O6.j1`&VZ-k4]&IK(`iIS' );
define( 'SECURE_AUTH_SALT', '*Rh>FowBo?`Y9[mD>$8,AwnlmRhRE| G=FRGF/Ld)bkbkH_*;O#XwwSxD5pWk{H$' );
define( 'LOGGED_IN_SALT',   'fDr/S<?2UyOC{N<Vyn(WqqgQd)`D{ozG@2ya&nOv3{oy](O19Vv-J#CN!BgSp2wr' );
define( 'NONCE_SALT',       'xCFl^2&iZVMLt`I;0j:lw~7|yJCExyu1_CBdsd Oi*GXBcnaIQ=,x26l FVga9P{' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
