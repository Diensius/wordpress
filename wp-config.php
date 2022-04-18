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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';6umCk/jO$i&V5Z(GCy/rfvn[{MuGh(}=wdBMyp&:b~2PeQq5x^!xD@V$%0.$?aV' );
define( 'SECURE_AUTH_KEY',  'DD3.]Ms{}JTUjK#6cn`@?UwS1.Rf%Ra$;E$0Vp+dFK[x#9~w+hPM-VE(oE&n*6#a' );
define( 'LOGGED_IN_KEY',    'S-cP^h|Lt<t?Akuko/?Bc%;BH3vEt/(Zruq!Wl/8t[q2g2]yA,fn%8`>QTG/,g7W' );
define( 'NONCE_KEY',        'JP$?!dxBOh++_L%b%k7]OU@R%xt~0sceL1HQ8o_chUd|;4%vLXrvm&!q;5-PyVbo' );
define( 'AUTH_SALT',        '/>|3[+_,:~-|-m(gcxsET<(YJ{$^Nkkh$&G|<_6rxATfvzWp{~6k6{QC4vUt+m+6' );
define( 'SECURE_AUTH_SALT', '&g`34#84EOpiUvntg>&gURNQkA=!/CB2n3I92F5gWd)S|)UZs{`k./kcZ2nB%Jrl' );
define( 'LOGGED_IN_SALT',   '}Hwh4xk70RgTVgwawDO,a!1p(+O!<*!2;Q71]65%a*u[Yg5fFFZB/%Zzg11{q_GN' );
define( 'NONCE_SALT',       ' *TarF*B3(AJp)>fypT3C=N$Zz7i~TcE4N|y!L>jzU)Y<AB!cM`SyfbhBgPx{sBL' );

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
