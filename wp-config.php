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
define( 'DB_NAME', 'couponsite' );

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
define( 'AUTH_KEY',         '7@0tU{~8Iu3=.=cSV=_,r{jet}S}RgE^!fx-Ay_h1SO?HsS4^_D#ueTUSSOH3K:.' );
define( 'SECURE_AUTH_KEY',  '-8bqN[Fu ~:TYY(1egOz}ecw2$q0K>h&XCvpsq4Nr%hE4Sr fHr1FtTNl]INft47' );
define( 'LOGGED_IN_KEY',    'bbIQ>$;T$Eou2kSY^am_g2{n*[<ZAbXGC~%%UZ,DihGjO[s^{mOV&s^^iW&I4-D@' );
define( 'NONCE_KEY',        'MxLcSOb^2/VQOL}|(c(?k+&Nn&|4|c!W&%XC_9s{xgu*bRM%g@%tc1Dwxp4@vk8_' );
define( 'AUTH_SALT',        '^`# $&*`fnFg?S;I-{y#^t]:NJ.#5BbE3wSUjet]8G.>{Pz0L:g8Xai7ZKa1m5?~' );
define( 'SECURE_AUTH_SALT', 'TIwE*4~/<v1Q.M2/NYuW<*FZNJ6~9*>tR-|Pd ~r)b5o,dUh(}jbj_nMs(9Wac&y' );
define( 'LOGGED_IN_SALT',   '=p]e7xKjO8iilf*>?(gSrhfuS/+U=tO&(1K[(-1f?2zQ[=v*IjHZ~LtQ9?Opgq@7' );
define( 'NONCE_SALT',       '$kWKvs [lGR)Hc%pg*Mb:SV T^cZGL:(ehJwA31]HFl7sgQ%H#~h~^ <XO,*?[}~' );

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
