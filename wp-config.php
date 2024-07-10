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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '0]j[%Rt;p$-84Pc^Tf7w:Yx}/}eMO!6.b(8US^[{-Y7+sMi,1R:JZ/%|+C6}3m}M' );
define( 'SECURE_AUTH_KEY',   'j&e1PP?Z$]b+x,[[YwNx*D0}?&Y96Y&N8Fh+5mU4M6,5;|zdGm`x<s,ne/V6`ih ' );
define( 'LOGGED_IN_KEY',     '=wyaHrqZ,U6~W6#19;/Hj#-W8--fDtRB x^%t{U&>N?w!cat)hhrOu&:Y%t@:-z0' );
define( 'NONCE_KEY',         '6(&*^vyy-M ?8$%9^}a1ye:} )(3DlW2sG}zCR?Hu6{P[KKZ}4`[s2.**yW:q]~c' );
define( 'AUTH_SALT',         ';ZWHQ%74^:S}y~WsEv-ZY|B)QyX46e3-O)i>$0iW:Ea%*W0XZRfU9nK0Cl+akx2L' );
define( 'SECURE_AUTH_SALT',  'J9?s<p~&c2wM>Q5G[p2#}_b C#n7lZh/N]uoTk#cS3agYoQJFZk(d+9uSM-b#v#H' );
define( 'LOGGED_IN_SALT',    '`gZr3cN`cb2uD2*<-r7M{!xKHpkTA2Kv%f`ogn}ze4&:~As(6I#<woEEhVCU$b1C' );
define( 'NONCE_SALT',        '*]78kw1P}Vs` p29WDH!P4RjVi[bxr0I(o^;L/;Tv8+7nkHX}&CjMT*7QbnO8tvZ' );
define( 'WP_CACHE_KEY_SALT', ',^eF0fQYKyynWOe_T2<2AB{`5#oX6Z;m93-1g)FaO!z%]@6|w~(:nON}-F#7l0?-' );


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
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
