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
define( 'DB_NAME', 'masterseo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', 'http://wordpress-jess.local');
define('WP_SITEURL', 'http://wordpress-jess.local');


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
define( 'AUTH_KEY',         '[cN]ka}Yh)?JW|xpQO1}$AE=<+=HNK=E8+q=|/V#Osnq!<6vm9YqvsG KU-`X(_x' );
define( 'SECURE_AUTH_KEY',  'X}yc?C]~r~ %7_eyeKS]ao4#zoyfCI{)[X^S.JT$1_2|^*=h!R 9P5hb#)c@H@`O' );
define( 'LOGGED_IN_KEY',    'vk.1XTnbf)c#<lGqD IjG&51KvVb;esr4dT/[}4^SZt[5E|J> 8R Nl2_UIry}^1' );
define( 'NONCE_KEY',        '; B{,zz~%ED+[M <%Bk{qei-[61M&AQJgjBo@x{2wuVu?.@p56LZn~2f.xU]/E-h' );
define( 'AUTH_SALT',        '3~!<7p($5gP)y<u;N1=Ev3 kjr?pcdGsCPpTA@MI`:Fb;CK@0%RJ8N3N,}/?ouXO' );
define( 'SECURE_AUTH_SALT', 'qe/+6C$qX8K)z>62Ug N/7z}3K4`t]1#0y8JY3,AO{^_:A<+V!~zJPc,Mu= *f~j' );
define( 'LOGGED_IN_SALT',   'R(B%x+kl~h,QvCaS**C|{;S_)v9u}=9C(R/,PHBjzV8&ohA+3Ah<Ey[H|Po_Vd+4' );
define( 'NONCE_SALT',       '/WqpLUVs=iRZVhH<V#|.nnO,SvgnTH3wDK;F7$xZQS9@gjhF=ov&gNS35Aic2mj4' );

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
