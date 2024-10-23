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
define( 'DB_NAME', 'mysite7' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         '0(r]y.x9]>@|/8U[=2_|AuEU[s7vZ7mozT,9K{9/Gz~n!4QrIowc-@g$-#&(+a<N' );
define( 'SECURE_AUTH_KEY',  '{vPKi+Ywm+1`:4ke&8/e~_J7JFg_Miyc|QU6ud,2~HoN?s?HL[[2ZyE;hR)/CGr:' );
define( 'LOGGED_IN_KEY',    '/`pU,lpk}.},OahFz`[~YUi7N~9=ycF=W]SM>1yj;z9YBGvx9G?+xNf|}b.@;!9a' );
define( 'NONCE_KEY',        '5>_bR2x!gfzol4`!lK0p^S<r$a{P&Mtf/0=a[Tq?GcHpdFXha7+ l0b!w3%4$azh' );
define( 'AUTH_SALT',        '0XAMGF4DHd,4oDfq5Bkgt:`7G=+Zb~OrLcz8OC:*KO.wm_V;.r75@gN^`96*K*@4' );
define( 'SECURE_AUTH_SALT', 'Vf>/+k8+1AxDcF:BMQu_6( J=aB;xS?_;{v;yeGN`KdmLcy /dH! N&M5`Y<4I 0' );
define( 'LOGGED_IN_SALT',   '8A>QM}?*uw43hK+[[i~bWy:#X6i3sgjSVHD$O#5})@FGm5h,tUoXZAy70$5^z32;' );
define( 'NONCE_SALT',       'YglOb+0u2z8E#,Hs<V<dl E`g+>v%6]TKZI>O`gti#)`aJ<g[uHMTmr}T+N2{S9-' );

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
