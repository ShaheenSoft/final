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
define( 'AUTH_KEY',          ']T9](`7FNFhh19]FySB7][AyQE.s1qD<c:uD_7N[de:9!6 f)ka9*EopVKr&fs+m' );
define( 'SECURE_AUTH_KEY',   '2C(:DRw)ZmqU$u@UW-9AfElqXiWX!9F#f.kj$/J2#t/SfDB;3Dy7nl;vQA(G:B)x' );
define( 'LOGGED_IN_KEY',     '57.)=`fg6@f4e{lgw9m@`/;ZLR>k @:w[kk}Ny?Vav?@3eh1Tpo)^RUreb+[7`>/' );
define( 'NONCE_KEY',         'JFT*agFfY!S-Y:}yS4rM&mv/Ns06m]kWl23T^<YhFGT.Av+S ?%x?_qZ),Qh_{8`' );
define( 'AUTH_SALT',         'A_5pg}A>#c5=ny[C}Z?&JI(U|Aco3vpxAhFwHUej!xs?z 0J?pYj$)n>8bh#$+Lt' );
define( 'SECURE_AUTH_SALT',  '_9R6S %!s&x)Y+OPZT|_4&uWa^sdO:1miVgyj>FJ*lR`Kcd7fTC`EGCdY`>{!@n@' );
define( 'LOGGED_IN_SALT',    '],/`ic?*E]8Iq`IbrIFFV(vz+nTdC^ [u(+#l*vaInBdH:y)4@Z!68JS)dj!#>T9' );
define( 'NONCE_SALT',        'V#/9vzj`o*5-J)U%$#ed29J0zJ/?uFW30ioE~bH=Zgc[p]Fb7`?o-{1 DtL(}9%&' );
define( 'WP_CACHE_KEY_SALT', 'TMPj7G)UJ|P|)qv,jE<HC^QWZ&sH~D1V] 7WO_[/KU:c^$~^!3TvfG+s.<Y?sJdZ' );


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
