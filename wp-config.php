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
define( 'DB_NAME', 'blogferdy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'iJ[5~4I7m^GJnVc()k|<9M06kq_SUk7s/L-+Qx3@#G.yO@ecC~:rFI&6Qu=5mnI9' );
define( 'SECURE_AUTH_KEY',  'evLkxy%1Y{`nB,e::s38qq23ZmHD&$w[L;Es =iuU0]hq{I7*Zg8iO~ZvOh.~^^y' );
define( 'LOGGED_IN_KEY',    '-WYHNn(gZ`.f^kF6z6Uo/ln-`-GAm|n&x-QUMs2qGIv0pp}0wTuNY-D#t<O@mS*a' );
define( 'NONCE_KEY',        '9f>ZavT_k`uqpLd%g_vR]g#xy/a#xf,[U|1MZER([bBZ#l{)R`yOmxX#t/FSlZyI' );
define( 'AUTH_SALT',        '}-KJWo]mpylj}a{}kK4wxf9/vwi<v)_?i j4_k{7]^O3v1.Y9xJNXnb:g:6d`3)H' );
define( 'SECURE_AUTH_SALT', '+~^^,ugvRUf@N*&[< 1QL,2mZS+3,-nFtvSoH6{S#gM:h&?_98>pq,]o@h4nb74{' );
define( 'LOGGED_IN_SALT',   'e^o^Daxs^GHup]?Yjx?<^Z~6X]uQS2VA.)=mUIk0xe(ObDcIAzXEjewn8Gz=r6(v' );
define( 'NONCE_SALT',       '9[0em1iCOA(zR+2KnP|UE<Ni`r{LmN-)#)wDS<eIRl<P/udAwatHV4)E,-!VN}0n' );

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
