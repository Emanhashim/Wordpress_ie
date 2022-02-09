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
define( 'DB_NAME', 'defi1' );

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
define( 'AUTH_KEY',         'bWFfVhmEfqk?i_]pFr7dZ*LmMPGs:WVB[vT:mvv(7lGt?(Qo:[=6;H.j3&boG(];' );
define( 'SECURE_AUTH_KEY',  '<=wHs,QZ*N8 &}nXi@B$z$ZfUx{_`=EXZIi13@Bt.I[tp:j#*M#(8PeQH?`^w lc' );
define( 'LOGGED_IN_KEY',    '!kc:T3Pd6=u]+Xjx(NgAu1LzAg-:LTL&MP&U*)Z)QMlB{D]K1i1s%l`W1a`TZXzR' );
define( 'NONCE_KEY',        '91iYXd.jtE1@62U?J1JjTG.on{qTfV}OT-WGeGZJrv{Ctg(:y>hR-NsY|#yR!GF)' );
define( 'AUTH_SALT',        ';XJm>RW)UP<dpUDU4sH6i/t6W+ 2BGz`P_1R/,,r[SLes[D]/5qon!~pa`wvkY7(' );
define( 'SECURE_AUTH_SALT', '5BPYSoJ7+q2%Tw+UVDf[yh*`Y<(@o1-,brNaNc+HViTg2Q0r,pM,Jxp5,ksm]x#b' );
define( 'LOGGED_IN_SALT',   'Fn&~V&7(}NIza~z1~[Eok53=VgT>>ZACOVhl~k+~ZWngZU9EGBECwh^f;Shv/cgR' );
define( 'NONCE_SALT',       'kld~9wsi>vaX:J%qjQAct#CO{4@)2`bm+NO~m>F0-]i1U=ePH!K5A<&{jPAxD!^Z' );

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
