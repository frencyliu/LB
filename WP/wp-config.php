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
define( 'DB_NAME', 'defaultdb' );

/** Database username */
define( 'DB_USER', 'doadmin' );

/** Database password */
define( 'DB_PASSWORD', 'tmRqiIAp4LL6P8sh' );

/** Database hostname */
define( 'DB_HOST', 'lb-db1-do-user-10767273-0.b.db.ondigitalocean.com:25060' );

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
define( 'AUTH_KEY',         'H_d2M)QPi(0nO}LsCAoGh_uB??a4Og<JQ[+6Sk1r3V&.YxL-ks+J9!< p_Gv5.4;' );
define( 'SECURE_AUTH_KEY',  't%vkBC%j,>7 $wc?8G?D5}Iy?Cf 5EiJ`~HH~6.}B4J81H$.9>3#`m;+XYL>/eW ' );
define( 'LOGGED_IN_KEY',    'm C8FYy,2aFQdIUP.>TflK6+--pk|2H{7 C nlRV3PPTB{T<f&nxwtaT=wz6_aU1' );
define( 'NONCE_KEY',        '-b4g~.p<tCo5dQqCbKdZM{tw?;r0JC}jKz<7g<w>$?4f&8xW|Zy~JvHmok<KiSXS' );
define( 'AUTH_SALT',        '&KT^bS^OYBpA]uP7+oU]}RygWgi$7bao:}78le7D!gk5R}K_#VHr4$KP6~AP=Kfx' );
define( 'SECURE_AUTH_SALT', 'gI;C(tlQi#NsWT=Q?K5LWB88?H)>&]R_c8bnf0=9oE`}RX;L!wt|Sz(ecX1/hY>%' );
define( 'LOGGED_IN_SALT',   '3q|I1NH-x>_ep+OS)4k c)ZH4%ie)%6K/6,nTyfk4%xmfZ?3dao? .@?khvv$<w&' );
define( 'NONCE_SALT',       ',/%[h,0VRF=P4C43%+Uq~$lC[w;-{1j]A#L_:^Am_6P/Xh3TJpD_cb*^!#8FhhyX' );

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
