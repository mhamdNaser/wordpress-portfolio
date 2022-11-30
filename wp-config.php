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
define( 'DB_NAME', 'por' );

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
define( 'AUTH_KEY',         'O^Wuof2-auq[Armr[v^nx]I8&HPjD==Um,.A/z=}Y*!j5bGF[.?iU@6t9kT$q vB' );
define( 'SECURE_AUTH_KEY',  '{ZLFxu`HHxg*{g$8V~;;2Cjb%K:x%E0=mRXkR%Hp6iOH)avVq3Q 3|jc;|#0=(@3' );
define( 'LOGGED_IN_KEY',    'Sp0?cI@VBNKw>n7)_3pEy;bJmmSk8/+TbDv|Iq(A{^MoWhQn5tV<rz`f ,IGmO7p' );
define( 'NONCE_KEY',        '1Fq .ykqOqvM{VD>kP42$tctXP_Vk9}JqW=6u`dR6P`cMNg]PdTj-jZ/L,s7`!~D' );
define( 'AUTH_SALT',        '`Pl]q~/Hz>,Y4<>Nf_;@/k,)%MR.Mo<[ORPd@M!a<|6];n)JeTa#(;6U^9`KfI7v' );
define( 'SECURE_AUTH_SALT', 'FB>f^PK|J0:2<&|7VWh:29xL%rnSQB_jS<CEX<]T~Vw(5/Me}Pa,RBR:@8qp[4dk' );
define( 'LOGGED_IN_SALT',   '0}<H.cy5^FjO_97Twb)v.vQ|R]C+!hP$hjU%X-7TY}BjEu}}>,|C#hlW 3fn_=QC' );
define( 'NONCE_SALT',       'z-OG.*u5=gZ,qcft!b.qQ*[ bkpPo;ZGuH^mON4LX_V[X#UC:5up5c@?9ka&]v{L' );

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
