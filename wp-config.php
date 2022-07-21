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
define( 'DB_NAME', 'kingking' );

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
define( 'AUTH_KEY',         's6244d-)-QMRGG+}CPTMVB-LUD`4E?ey<&nkkYhxVTm]Nm9cByN|*JRBKM8:0)b%' );
define( 'SECURE_AUTH_KEY',  ')#fHY6:#Lh[SItPpGl`Agel@PMF!mLM={{K ~EtK,._6?*K/q^zkH,]O_F;0^u-=' );
define( 'LOGGED_IN_KEY',    'X5`$:99.C(5JWRPPD:+`hGvNWM5gZ7 n^+$D(jKCQpiDx[8G^/Z>D1^WE|]|:%.g' );
define( 'NONCE_KEY',        '4QsGuo4Qovf>qgr|87[ma6sz4DkzfF`ro0PIo2$RY4=6Z:>{=w`y$;9=,gjP4[5/' );
define( 'AUTH_SALT',        'uW$!lHtOvt}]8i[TC-AO!Aj$? `@a^*!K`@r{I3&Kdd8^~$sdP{L#mX-DJp:fy@O' );
define( 'SECURE_AUTH_SALT', '3J[S[U;d&`:6AODd=it IIt@^Xpx0Si=?2}*RdX6p%.i`N2bGi={Et3kg*mud-sN' );
define( 'LOGGED_IN_SALT',   'JKcN7,8*i(h3GU KhE>KRd){%KX^fsnO4)DAyrA!@n$NFrU_@{A >CF|9Hi%`9pU' );
define( 'NONCE_SALT',       '`l.GCwEHj5C>Y%!NnI[H1<SU!|r<:#l_4Bw,H!Zq^Sv5G/ qswK9H]YToUf!wkln' );

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
