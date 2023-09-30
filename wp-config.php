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
define( 'DB_NAME', 'wordpress_shopify' );

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
define( 'AUTH_KEY',         'bX~x:w;8|R5$?X8E2X6:v(:s]D{7PMgm;8+F~W@U=(ha$w@78t%c=)-i<)-I@It}' );
define( 'SECURE_AUTH_KEY',  'ZjscP/7ro$=nV 9|3w=kj%yc>y(itSk%eLDTp3~$R7R#<Z#|YJR ^iq3Nfomg9y|' );
define( 'LOGGED_IN_KEY',    'b/pT)eBP9ll7~R6=@ iIjLk&^DfN$pq[.]w&(+XYuRpJ|rslmhIe)n8rdrlOM`,:' );
define( 'NONCE_KEY',        'R%y6 J]#]a(LU~2O)>YsYy~vN/;JMe7NRark0Mu!AD7QYd)fm,*2$ky>xfc3%^U.' );
define( 'AUTH_SALT',        '|TKM=,,RHe< $>^E,02|oV5]Bt;R%-_Q#k@:8eUiM/ypn?qp/M^[,p,-#GM69{V$' );
define( 'SECURE_AUTH_SALT', '2CQiFK0gxl6]Uzp[%m>-8VoQHL@SQ@DJW~S1ZF0ocPBE9@>5 ;TaA@+ 6h|`3t*0' );
define( 'LOGGED_IN_SALT',   ';Enz-!oH1>:#:P]x~g?ZkeWIS@{yvUQe3jbC]/d36h$zwQd/aUYf:UOdM /*5d1Z' );
define( 'NONCE_SALT',       'sS}q1laWIe)~G]zqV7-9|]t%$A@+Kw:aAs[`H$v2tDz:!3~s]Cj#Z;HaQWb=r)8C' );

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
