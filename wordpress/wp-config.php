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
define( 'DB_NAME', 'lebostark' );

/** Database username */
define( 'DB_USER', 'lebo' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[z2j4~-wo4,%u[7/4Q]#cAT 6`d 8yw}_g`f+hR^X!UF@qo:lpUxARc}1hD*j#b_' );
define( 'SECURE_AUTH_KEY',  'f63D=}UJXwnLq|w:@Y$cyQtx6w~t/Hc+>)Y9M|U}T40YO(Bzh588aL0`o1@O6/53' );
define( 'LOGGED_IN_KEY',    '8;O^3 i1*M]p{~OO#p<})-UnC*cfTnDi.,XXdK8>v+]08S`gHhc#p373x*F@OA^}' );
define( 'NONCE_KEY',        '459:h3Y1T7$KE8f;TCDle6%M0&)9PoDOI87NY{%N=_+:4<&k8`~{E~&WlAtoPjw6' );
define( 'AUTH_SALT',        'q?(YQ1?`a9;5ec?F)D9*!(vAL<z*S`yuW&$=zrY6cx)cYYT]1HhUT!Ql&zYHINzA' );
define( 'SECURE_AUTH_SALT', ',}j5YnO?Mr6or?MkuCPhvT`QW]t&n(Nygx_nd~APemL&@^xihxVwNa fsaWwKX B' );
define( 'LOGGED_IN_SALT',   '<uM3b=|odm=s4|&SI.b_D^QKbFCWZRw/Vq.Buutexf`D[tl#XT3T3kPsU6(x7 |5' );
define( 'NONCE_SALT',       '.}9P|<Vp@dlUyq{0N[R7!wBv%vX@2dBc _p<[+[<U&]ki1|TTF}:DM%oiEPts7}]' );

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
