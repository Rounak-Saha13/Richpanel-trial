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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cashtroy' );

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
define( 'AUTH_KEY',         'x_mPpr@*KqC:/x(Ij;8TO%3+MfDHgmURW!~[P}>?hFMps>~hvG~=ntzkz_Q!/T5e' );
define( 'SECURE_AUTH_KEY',  'u?e>9c/o0QDz)0>-9jK[]<=4u]v,^;NW[DS?~g7 l+0lN^<OBL0mAwNu0D*tyt8c' );
define( 'LOGGED_IN_KEY',    'PWiei<peB~QsYW8ZFY|o5`/<kR,*t[#wV/EpX~2O}Df<7dQ{++.R=)}*n3^v3Dh2' );
define( 'NONCE_KEY',        '*Lf)84Ws#HRSY@&f[Bb]tzk<JefWNU0%R?[VC9CYg%n4o}vEuWSYHd_CQu+p8>I-' );
define( 'AUTH_SALT',        ':k{$&sB{FTd4Hfmata]xT88|oVp65kLlnz|Qn>P^rQ8vyV3/ViYwgc2+u63x[KbJ' );
define( 'SECURE_AUTH_SALT', '_L[j5^W(#m~L2[!q1fC@A2C1=9aq:}**~V(t/i7  R6TkT`f)#L<@{;r?r9Xnupq' );
define( 'LOGGED_IN_SALT',   'NE%Th=*>A%cRBAyDcB` w+mZc$=b4%cmoEt>:mC)l`/yd}k%173b_wmg+iIBx5].' );
define( 'NONCE_SALT',       'hnPqlLu=hv}Y:M04e/ HQX2Q|Z-r)}sSAve_KRD0-HWZz<TAOw=%p~`,@z9_NVpE' );

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
