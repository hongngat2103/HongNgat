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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myproject' );

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
define( 'AUTH_KEY',         '#J;|oXV[p~7rcidjzVvB`,%YkgI; H/Y[fCqXi|P+9g&M~_nlper!))EBS1 @cjY' );
define( 'SECURE_AUTH_KEY',  ',2|vFC2o3XX6{q~{iFZTt2RjTcpzH(`(J&jRSIy4Z1y=ktjzVm1Z)h~:r.W>bGf?' );
define( 'LOGGED_IN_KEY',    'yAmIWwrxkB+LT&*O0jzjp2GT:QDiEKBVp;VJh/|NF6&Il9{Xg36Kg5Waof4/#jUD' );
define( 'NONCE_KEY',        'NY,@F6_u*N+vC5C-8:4bQ5s-Pk9A;v/k1J%mXI5gM,s`{LfMny/eU9IjY61}VPvV' );
define( 'AUTH_SALT',        ']@x3dwm0cSXsj)B<rAu?n$Sh#9pclI#J58Sa_ r49t^l`19!KyJ~%<$%>|63%W-A' );
define( 'SECURE_AUTH_SALT', 'e&z{@3 >)]?P|<R$@Pgk-^IbzgDrXjVK/cDNKg3Nwd,#<SiOC%nKHq=:yk6g.b+O' );
define( 'LOGGED_IN_SALT',   '!LSR%c*xGz,Z_]:=8_r12L|QAEV~1s:05$rysOwulpT?74nn2@#S@$j,nfXn9u+F' );
define( 'NONCE_SALT',       'm7xFEN?[bUEOI6~WZ,AZ)8H<)(?-m;5uthN2%5DoMq7MqCDIP<k8{1jnkPScpJX6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'myproject';

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
