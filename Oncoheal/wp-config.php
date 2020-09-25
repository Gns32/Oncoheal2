<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oncoheal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PMdCA!ij~JZQOwn<#EQK1*+6;p3!s8eSA#i+<,I*P*Fiv8b]e;By!&z5>gZihf1j' );
define( 'SECURE_AUTH_KEY',  '1L9fHnlA }7P2aJ{hL[oX,9RTv Oj,;V[YaD^W9]Gb~1KQykWTf8(kmhZ%fQ!51C' );
define( 'LOGGED_IN_KEY',    ';kfL+.>ZsO0XayzP~yk{y$-~du[2V6JbK.3`E1JOkXy}5sQQ.yQZ6hv4kh9Mf=[z' );
define( 'NONCE_KEY',        'x@Yrc6#QHNi]!>isk.$r$7>&  F-OOX3Uj;NC+,S,&IM*Zb&%[d=GQ-r[ZFq9jo[' );
define( 'AUTH_SALT',        '2V;AUoEd,/!M?(CCorVW<.znkuHo8hy;/&E<I_#1KCyBOEh^h O^9kfqy vkK7.1' );
define( 'SECURE_AUTH_SALT', 'Bg$4~tJX?wOL_4O!3g@.mm/Vo<mj1+c|&n[vr9}~y|TPJ<=Z<!wUd+V/C:o8?OKS' );
define( 'LOGGED_IN_SALT',   '0m(UUFYsR%RT+?$B}E@B@MJsu_3F,cv^L&-V$4h.GW>:KIG$=rWr[(C^v@s5B4}v' );
define( 'NONCE_SALT',       'YIQ ~a/nq~<-g(nI;dVP1Q72S6S!_P{a^w4)I:C_XzJl*tkumc?3-pb)wQE:?ngN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
