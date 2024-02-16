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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'MedAitSwa' );

/** Database password */
define( 'DB_PASSWORD', '1337' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'Da)2NK<<:H#JDeQYMCSVw[;;*x |,,O|o0Nq2?BI7x9bH*sO_((XqrZAF,O/+_m(' );
define( 'SECURE_AUTH_KEY',   'E_ygM}>.-V3E,W f`YTAT>~L9TcZ;;4]c^e5nIhYCNS CV6s>x*k7|Lg:?!l`Ij?' );
define( 'LOGGED_IN_KEY',     'KQ$}3`Zd5~F%r8WW5h~NAm:-(c9j`Fak!t cYMz4? f%}PEIO]h&8S*ZJ6MHR#+m' );
define( 'NONCE_KEY',         'XJ_Fz^~*zpI!<uS7PjLrGfm}-3ZDb-`{d.NX3AI/Zow<pHbZ4LSmeCeT$-`;ZOsM' );
define( 'AUTH_SALT',         '9qaCcp`udp ;`MJqEc[]=cE1!d3@t?-WxEYGc`D]vg/<`7vg%xiC2uyl!;mdy<u^' );
define( 'SECURE_AUTH_SALT',  'SemMz%QE.A0O+ p*/2kMoS3? Kd~Q7p=+Tcng@;uC[/maSKp;xQubQP|-8U9KS<%' );
define( 'LOGGED_IN_SALT',    ' ,%Lkr*JViB^#]c:-9wa,OgXYx.sEC6{h}-{qiY[>+)lNd4bS$=T)>n(iv~d}5]K' );
define( 'NONCE_SALT',        'WE;M1WtxPoN 2gB--co+mtsoCEDjKySS(;NpebBC:RWP$(h{2v14Li!Qc^u`?kWU' );
define( 'WP_CACHE_KEY_SALT', '/MNab?@N)>3}o.f/i,<w~>Q%A)8HHdXI3tqk&+E=cM5a<jd,n-{cE_jUht+fwbI)' );


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
