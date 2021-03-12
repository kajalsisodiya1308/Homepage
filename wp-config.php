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
define( 'DB_NAME', 'homepage' );

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
define( 'AUTH_KEY',         'P+YBu>].2/S2][1.tQ^Dpq~`#FB(Pq!tPW`*Tn,8WLK5vC ~P1;h(d?^gI3&Bdb ' );
define( 'SECURE_AUTH_KEY',  't5! @)=JEN-t<..kv-QhtfNm/=}yYMJE+a ?{~js*d]}lC.mf}I(4W7iF im|(2!' );
define( 'LOGGED_IN_KEY',    '#$;d5-lr+)tpf/1s;M4ruRu]~2`g2]CTjqe67Mm~|r|$oB$PFrm[gRvIT!4.Eb9B' );
define( 'NONCE_KEY',        'Q*vT<#y(h<]Mmp> 9?$+Q^wd[Tnu*DjWep^BU$OU|8iureDBnh%#C,m*?0mW{(k.' );
define( 'AUTH_SALT',        'r yl=`-WhQd51.pg^(+@G<C/zm|Y<Y}qzCBbUMQL(mpN.)uW6*JOsR9CtX&UGFcu' );
define( 'SECURE_AUTH_SALT', '9#Rl09D)>jsg2nB!|gn:>-j6$ZfPKH%KG4^*wpj=iK9|@cID[EH6m0u,e0SpQ=-M' );
define( 'LOGGED_IN_SALT',   '%Na{g2N9twj63t7-:+l@01Vl046NCAhbkOsBb;AFNae&mdA_+jRXT(>*f~_X=4%B' );
define( 'NONCE_SALT',       './y pxBMqX~+L^7&xZBC&Z]<&~T;-xO*q$J5U)tP.D~bx[T!JN-:wdA/L>zU?L/Q' );

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
