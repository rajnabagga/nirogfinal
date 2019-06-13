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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-sample' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*ym: t~oP1:8|n[Qom8Fk6*f*CDP_0-^({4hP,n]`<jzb3:v3s_L|xXG|b}s.oTO' );
define( 'SECURE_AUTH_KEY',  '~C_+G?aV<jCo@OJ@:8P[&1Uc0ff*$H%MgHj4aZq=Z_#gxW:lcsy  c}=O1qKt!/,' );
define( 'LOGGED_IN_KEY',    '8Pv#;L=loVRlBIXC[4r-8s+k8`Sp)=w*gw9]%6|bX=jWqD&.O,3u;zND?)3>[}qJ' );
define( 'NONCE_KEY',        'H+1oTWY&XjKWv+xMsTk8!Q8m3,NPHdLT2MUUKl3w3QJjA,z?4wu-}1X=tPW?N7a-' );
define( 'AUTH_SALT',        '15;e<yp[>zV`Si@{;mHi`(t3#oCZlU?TFBIA`Od0h6e0dPRPw_Q?B*bK>n[sbwm;' );
define( 'SECURE_AUTH_SALT', '(y=P]!B{OPKdcW<N#e@1`y^vgAq?p~dy:10D^AMA.<!gZgma>GgytD#/ /NNt5X ' );
define( 'LOGGED_IN_SALT',   '88sg!*&2#9g}9PHV:bCMvl7>;PXH~yX$f&9MA,Y}rQOd:jbVcz]6U*g(5|Sm(PH`' );
define( 'NONCE_SALT',       '`ZV8`6<AbZ}o%!+Bua1q$7sK8jX3W(;l-3I&*4M[Am][xEP-iZ-ZYX<4:c@I:I?5' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
