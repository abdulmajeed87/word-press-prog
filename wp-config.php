<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'abdulmajeed' );

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
define( 'AUTH_KEY',         '*zH.aZT*8l ]`$GwQcd|Pc74`_=6>f!C>dSN4|6J-F^Q?G68#vhdIwO-b=|{sS8H' );
define( 'SECURE_AUTH_KEY',  'C`qKh6f@Cm.3ir@8QagGhBE^Ju)Y( `$;fhxdt;67GLvlahAr)rVFlUnN~IX66/m' );
define( 'LOGGED_IN_KEY',    'vM}@wTfXy$+75*x]k2I=%>lcZqT&F+~(Vs8Z>BE3o@d}q>BG)dR/y}W#(gc!si8G' );
define( 'NONCE_KEY',        '4eMQlMM1A~W_ZVgD 5^WXb;r3KoOU#<!T1q@.=g+fbR?!J@;JL%)lIQEwcvUDt4h' );
define( 'AUTH_SALT',        'p$01F1$S&WO=MpKP8gTH7xcX*O-?ne]e(GdKx5(2M-UQ@P=K~Wx)4szj8zGhVBP7' );
define( 'SECURE_AUTH_SALT', '>Hoc_Ds!3~jK=$xnrN;H`scOH$Ylcy5Yn,B=`${V(q~|#XL QVZmaS8W1S<{I0^4' );
define( 'LOGGED_IN_SALT',   'sy[pX+Ez4G;N~{XKa&A*6[j>h{ss.!Y3$e& p~.prs73Q%0ta$mc<rSRlMkE/acL' );
define( 'NONCE_SALT',       '!+U+B oEw1:_:3eEz*eG$.Ecjmf*Co6}?!M5M?[D+ryrti(vxG&bnN~09z=a~TC*' );

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
