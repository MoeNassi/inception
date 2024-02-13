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
define( 'AUTH_KEY',          'MTF<25#M!ffE;`SpEGI$<Y)pvu?!$1;Ihu9n&*~3`Wby*6t*56?qb/!!?1Z}9]F6' );
define( 'SECURE_AUTH_KEY',   ' wRS:{(IGaKt4QV4q:.gF&ahoa3vlY7UJ20d96}Tf])VeZ/JXigrJ;At<fJQ196F' );
define( 'LOGGED_IN_KEY',     'CS$@-Fy}qNUXbh.tjo)-}YBkXdM7YMwBw4j;nY !)fIs@@S6ZO=cVT,j!@ediN0A' );
define( 'NONCE_KEY',         'CpT*wiQM5<cj2n25*UV^E^6XZ(zd6#T5XGQ*|f}BPr_XqaL:?u3a]>#SC&Rg ,:{' );
define( 'AUTH_SALT',         'w:TS/@0[m6?~S{s*]vT5rNVt`xajq%Xz6JFj1Phvg*Z+B9&,D):Q2@[Wh3pMFP8)' );
define( 'SECURE_AUTH_SALT',  '.%=mPM4lEg}FoEJq{-Bazd^kGh6)y->6|(e12yV!o{o)00<{(s!2+3Ss=8vqiL8X' );
define( 'LOGGED_IN_SALT',    '%>fg=lZcnqrOZ2K3${2R/HOG5Y8/QCo$6nTbXaQouv!/HX]hm|3evBWMp~U+tA)T' );
define( 'NONCE_SALT',        'zKWXOX9I6xEPfLT)(,4Dz(9iVb8y}6qYTGc`_N02V_L-+.x+WEb3B5IZ3as{sR*/' );
define( 'WP_CACHE_KEY_SALT', ' Iw`uH7_Yv=:-GH#yRkjvLHb1F<.dA4]f8#/.w8j.lWN4Dp=]JNH=Bz1|rXFQ^H_' );


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
