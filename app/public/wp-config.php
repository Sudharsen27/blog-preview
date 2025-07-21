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
define( 'AUTH_KEY',          'oj@V %(c!Yk[>_:Zx>N~WQeL|Y+Om*O<tP1Y];xJBpE#e5A;GTrN&1 ;ma]N7as:' );
define( 'SECURE_AUTH_KEY',   'zy5LuGIqcxw+{th6@`|d8E0*>ybE*]u4r}<*AT(Ry&k4m}3CLl}?Iy-CwF}Bu|15' );
define( 'LOGGED_IN_KEY',     'Kd4vk?,Z|NJmLQbs?nE>Nr8`8]:& .z]%sUtANTO`fEE}+L} =7jI=&5j!fr;OH*' );
define( 'NONCE_KEY',         '?D~b&{_-_`eS:)sK36s6 n@_sw-@WFDdd6nN{bt`M-)F+@09[&8_)ko4<Q3]BvEf' );
define( 'AUTH_SALT',         '.a%3T`oJ:?Cy/VO]qF!R)@V~x5B`j,.7%fM9EtB/O8 o7rQADal#*,s:S]O|Kt:q' );
define( 'SECURE_AUTH_SALT',  'TsV[vL~U8(1<Fnm{nH#M]e@+|N@7S[9v-~hr{Z~lgIu)pglLD>$x#J>Z>_5cQ&=f' );
define( 'LOGGED_IN_SALT',    'GH??Xp2<j0d]aS!v?Y-gm)k>}x510];ZWo;}^*(T7L#Etv~;Bi`j2a|hoVAp:w]V' );
define( 'NONCE_SALT',        'v1R//L% xCW_D_q-/2(:DB)Or-24.(M6Mc(1yT<1z[LaM:6 #|d+]B`)C=i}InR*' );
define( 'WP_CACHE_KEY_SALT', 'ADRdoZm8|+V^v5chu|r~]Ti)=BA$2tG%rLNe4}s7Se#cs9vrts7Np|vkNqBp[cxs' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
