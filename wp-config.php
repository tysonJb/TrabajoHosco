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
define( 'AUTH_KEY',         'A^cVo,JI/;nEuJ8XK2`t&rn%:;B[>S_QX->-/STil:N]plN&Ws0]qmX7(AKJmD3B' );
define( 'SECURE_AUTH_KEY',  '}Z#*c70??Ba=?4>Wvo^h$(;^&6Nz5mD|c/G(%NKB :Y&FM`[kcv+mk$T4r(qUE~.' );
define( 'LOGGED_IN_KEY',    '8+PNs,e{F[L q;hPgB.1LT[t#j}`/iI4WELpKXTPdS%aF`0,}k~B^`NMs^{f:W#M' );
define( 'NONCE_KEY',        '4;!51Ha5}.T0mx;lS0>F%J2r7Ww.cW.WyLY__q4BdQHZ@Jn/GL7k3 6l,e;z2t5Y' );
define( 'AUTH_SALT',        'GGI|r4Go#=7YDVH2CGO@7<V3yG{L!00]v&p*yP|6^3%6 @ADyJWlT*(6W_W=EVGP' );
define( 'SECURE_AUTH_SALT', 'leqrgSbPw4A{@bwyQ!B8dU12#mT?7,42){iUZ4:uN5IR+W8=P#,T:O~gttMGqm=H' );
define( 'LOGGED_IN_SALT',   '^_&HB}H*6_(9I<I~%j}T(h,axnsA4?V*,:!cJ},OBg_g@&eIHD:96-N~N^@_Gs/7' );
define( 'NONCE_SALT',       'V[.zFL.,4~5 :ZHG=w?KwT0m2;/lbebwO&P{W,+Gc]B5)M-_54,tm&UNmX4Y-v{m' );

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
