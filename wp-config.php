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
define( 'DB_NAME', 'ghyaseen' );

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
define( 'AUTH_KEY',         '.)jw%Qm/}H,015r7K0>%n<r;kLgzAiZB.mt3#b59RW}:/saa%9[jwJm3Rl-!Z1-v' );
define( 'SECURE_AUTH_KEY',  'p+$-aY-N/lPIK8C*zKw2@tw$D{|1{x1>oc>tw%YD*FyL,F::>FZ3^gxcQjz~TT8p' );
define( 'LOGGED_IN_KEY',    '=kt$X{8;w?{tq zt T!|P$X^R@@.^zZ50cS/U^jplzD6H4V.V?HiLFeCNf~_rlh|' );
define( 'NONCE_KEY',        'N;!@_7//*ba?LU!l<(=mjI.r!bM&]ft)s$v^N#1;}cU`(YGiXX{t3b>8LlY>`(/$' );
define( 'AUTH_SALT',        '&u*j:mB3y7&-7%<*p,8OE~F=G{mjL`Pm#bC3kZ=ND<D&>FdFnC_9i^t9X}W1Hu$R' );
define( 'SECURE_AUTH_SALT', '^L)c:uq# K<lvQ 41Q+M}O?!qfb`;V5,9}xSucI8;J|Qv+?4.;09iH)I=)/c;>~!' );
define( 'LOGGED_IN_SALT',   '!}FxQ$g2Su&cBECLk(!7^Wri_mI$6[+fbv[saw`kqFd|dNg<}{d7aBu|hi14>pfI' );
define( 'NONCE_SALT',       'Q9R`XbSPmBs4S!i5/t.so+>CAD:U()|sNJjqd[Dv1|s&BNhqns//:%.eOlF_%KAP' );

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
