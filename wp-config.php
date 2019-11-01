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
define( 'DB_NAME', 'demo2' );

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
define( 'AUTH_KEY',         'xM)<3e.q?_eb/V[ /Nb!zlApu}_}9`.qoEj=#QKUM24Q:+de;8J*H9i]`[t?*V)x' );
define( 'SECURE_AUTH_KEY',  '~6k{=(g(or5yz,G:oHh8O0_?lYSU|?@,)JbQJ!nac_O<Y)%+6F#/D&BSNzl34U*X' );
define( 'LOGGED_IN_KEY',    '<%eq==Dlrlk>Ig/J0~%h mxVbgt!uaW2MR(/x,)cbJT)vQ$]g-;eo}:{(90/qJR]' );
define( 'NONCE_KEY',        ':{)7?95zWd!74WLI`<k+!~)4| `x.>wvZhfT`_i4Dky)T(Ukt_Z}^nxE`F2w8-Le' );
define( 'AUTH_SALT',        'd/,zAIhkh/QJ[y5&FnEFySC2iC@b>tNRMrsbCHo!!xO4|laP.BvJIM 6+rNfL^T{' );
define( 'SECURE_AUTH_SALT', '}Ut~t8&t$Sr+-0UJv* += H1%:Gb@T~dV^6>qK3N9Q(N9cdQUA}@Th)^LHB,!d^k' );
define( 'LOGGED_IN_SALT',   'w8y!|DOGu|~@a;Lzu?[0|gp|R>>>|h&89X]zPI`H@qxgoQxDuN#;KKW3r1,p@Hsj' );
define( 'NONCE_SALT',       'SMGy~{NQ C %f<-:1-)?/d&H*oZ1PE)HF-pwH`$ `r}m=`Y4+|>@xynOg5y|K 2z' );

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
