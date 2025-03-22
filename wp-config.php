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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dd0827cf34f8dcd38390eb14891257d25177e21b247592f0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '}Y#A{+]68ewa0u6uSv~,bJmSV?SHDJjR|<czOO7{b_tj!!?XYz9o-u)&SDz:;.X/' );
define( 'SECURE_AUTH_KEY',  'Hp>~Y?.gu2*qmg;*X8WpX-uX0cn4l@sMMbvHsV N$`Pw|10Wcpm-+aB&:$wC1fmW' );
define( 'LOGGED_IN_KEY',    'l3tfN,lno<s-g|L|UTJrX #g&#:A!)lZ7rX2#GYl(9qCu|FIuP:L<y_G@tM}|}w;' );
define( 'NONCE_KEY',        '~F?;CZ4a).+Nb|y0s^KqeMxklY5S!OA @hGvw,>*O6di6QU8we7a^PrKPEz~1 9q' );
define( 'AUTH_SALT',        'oCU1k(0afC*(-XjC(4X+L3TOh-0:w1HS2cSR[6Hpe^-ev]&@/&XR5N(4rB?X~DKT' );
define( 'SECURE_AUTH_SALT', 'gh4|09fUDYbzMVxz/#9w2A74QI0B`;nJRt=bNHw<y}>Qi<K]x2xy,|u4G?SfMeOr' );
define( 'LOGGED_IN_SALT',   'kCuo()AV)Z|OV]$)mW]-Iji1g-fWR~F3qwzEOznX%[7M|0<2lqV;~/vuq:uRu!pO' );
define( 'NONCE_SALT',       '>G!r{FF0tI0tt7{GMHe_}1n;H=/]Ow1-SdW+-{K:0U./uixY`;{8lm7IgI]I~?o`' );

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
define( 'FS_METHOD', 'direct' );
