<?php

define( 'ITSEC_ENCRYPTION_KEY', 'LSA9MiVRLkp2JHVuTFZie2l3JVtKLi9pby8oUVhjWFtqfDFqRVFyTVlIZnFWbjIya0lmRW9CLXMzaiYqVjUqQw==' );

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
define( 'DB_NAME', 'sv511379_wpzoryana' );

/** Database username */
define( 'DB_USER', 'sv511379_wpzoryana' );

/** Database password */
define( 'DB_PASSWORD', '33hEd#^yM5' );

/** Database hostname */
define( 'DB_HOST', 'sv511379.mysql.tools' );

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
define( 'AUTH_KEY',         'gj~kPjMD9SB56C),2npj`BjAV=&,1*5J=3VB45DGZ{2,`qat:@tBM8cpz0+OR0W(' );
define( 'SECURE_AUTH_KEY',  'nGT3=9}fpBg;(~I>w_]&6{DLq;i.9/.^C%_tR[Fy$5R5UF}us0o)eJ2o$js3Qfuv' );
define( 'LOGGED_IN_KEY',    ']^4dN<G0ZTZKulA&b;6z0Qxj!;#ON10PAApNk}Nz}Vuvi*D;=Bo>{i8r&tv/E0^l' );
define( 'NONCE_KEY',        'xt:J.@j0sKSSd]Xcro0h1Y~YV?S-^$OcO3O:71Z8<nTQ<l`9Es_20Hn#uJF)s]W.' );
define( 'AUTH_SALT',        'q*KQ]@!N&^kKtmk&Jd-^~0)%WITq>o[&.L`4MjWY36([e7~f4lvm*vfAbCukX*A0' );
define( 'SECURE_AUTH_SALT', 'gK#qqIwDr0e!KJlIDFvhJ2*94&/1NI^om)8br=q<P.|kzLq`>nhg:j/738pZwkp<' );
define( 'LOGGED_IN_SALT',   '3UzYYtlSMbZ`Lsb8AIX@;b#Sy{mT#t!S(~67htNqq:0=x^R$~v=Nk[JPT|rtsy:&' );
define( 'NONCE_SALT',       '7##kaE0UF#;>u,S}vF8*A#TDa^RVAnku;yQ&1zHOn1&gu&,`l<Rk-4qd)*@F|Pt9' );

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
