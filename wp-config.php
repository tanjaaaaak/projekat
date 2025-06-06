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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'rw0a^R3?SPK8pP{Rv2Y#KjWvX^J9CVdpWWbl>8PN?9$f{bt#1EeM-9m?H|NE?sMH' );
define( 'SECURE_AUTH_KEY',  '|cH%{TA|b0?m@j ws4(n4 KGo_TKu94WZz10O<zkA&tKxEJ;jMs<Dg|?o<+H#h0n' );
define( 'LOGGED_IN_KEY',    'P)9SjDYxjAZo=|ai8u@6qrw[@%kVQS;9O:,sa]kqnu@*CY1s!YlL}-w{dA-QIw_+' );
define( 'NONCE_KEY',        'x7Hfux@2)K}uOz~:jXq*s^194$`4L<vLW)r-pF+9OT&^TZ!NYh!DmIe)sg7~#}bJ' );
define( 'AUTH_SALT',        'Q]GWfX/OnU-ko{/Nn4I>:(DFIMD|`xbOsWO{hiDfN#M*q7m^*tZ=#rLg+gi*.9_<' );
define( 'SECURE_AUTH_SALT', 'ILv]x7oO!Tm{_zhD!>YJI-LhGdnuo/k:&B7t;y(0v*-o<j#c8|uziT2/*r4sL1Z.' );
define( 'LOGGED_IN_SALT',   'M{~k/gNcDfvsH>3hMCs!y0:jI1cBsBjRI-j)85;mI<q/?jb&dJ0>ix8a{=@%D{5F' );
define( 'NONCE_SALT',       'C5!Ds5(3vdOkFCX<v319j32xN3YrNRrt%yzJc[C2YnW)e|9)3I )R%K$pN1)pxFA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
