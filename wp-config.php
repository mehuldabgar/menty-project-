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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'menty' );

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

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/menty/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

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
define( 'AUTH_KEY',         't!SRWuaEP:$vH(]6kQ/{rh@]~4a3}tc2OjiB[cXad9$a8l5{S/urLHk/f}j-rj#D' );
define( 'SECURE_AUTH_KEY',  '<=^>S%l^ew!lQZ4-9sZ*fd}O^77uJKPLW@,:Q<2`H1*_.Ob%hciew^H_FP:pD!`)' );
define( 'LOGGED_IN_KEY',    '@-C8ol5*EfRUfmJ1KJ_kne0.H/BcqHi,XDYuz2xY&R`y?$_}EAbYcr3`WTgE/w9r' );
define( 'NONCE_KEY',        'HZS}W9OY%<&f1d|nkytw+tFJm&s+<x.G3jm5eDgjV<,#Y!X :}<jPg&?FeDt`Lug' );
define( 'AUTH_SALT',        '`M@+QGI&_$|!6.if$<e;VG5)zfBM_W|vMtA=x,CFimvvUxIY JYQCG[W^Bs~sM}.' );
define( 'SECURE_AUTH_SALT', ',]QU%8,RG9J>}lRB*n8.-$y[0IBcJTKV:23:2b4*=E@iUX)(O:8f)0Hlw+G[UT_m' );
define( 'LOGGED_IN_SALT',   '~iDXY3GIrf1>H^vz!qm-:ljt%Ve7rjkLZ|-[6#o]vC>kIGg9AVM8Ff<}I$yj?fC<' );
define( 'NONCE_SALT',       '_l_Vo::>gD<dd3,&n]Nq`!o}zW8am`PWxa1-!W)H4(,O!Tpd_$BtqF||PXEJa^SW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
