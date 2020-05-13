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
define( 'DB_NAME', 'tenta-cms' );

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
define( 'AUTH_KEY',         'J8+3~,`xpbZ#vjt]kpKA:-^[(RxK7(*@}H,+?t}B+:hygLvUknY8RFt,Ic&D]Y^4' );
define( 'SECURE_AUTH_KEY',  '|m1eJK~SB=3y&6NKeC?#p&88Z[@T?klgsrQu0UHNvJz0B=XyPngg2RW_Oj/_-_sG' );
define( 'LOGGED_IN_KEY',    '6xvm]2u R$Y`xIo#r&6,HEsz*{MAo=g1vuXDgo4fXp?>F$kG7/:S%C;&}z{SX{^-' );
define( 'NONCE_KEY',        ']inX7g<V0&r^d<ZGJT@BN::@=4=eKPUuKS]P:_HdOXRJXp.TX:j lY:G:pZjzp^:' );
define( 'AUTH_SALT',        '~bjzg[rW3^|qH<E4K$$<b])95e#Y9vHZ**EmT:JY~xmhFnU;BK._gox,w54I7:9O' );
define( 'SECURE_AUTH_SALT', '5R1S6(dm2wo`)4!^,2F^IJP>8rhny0XmWrh~#(X,x3 w<1vtVPUYtrGO_J@XpM}8' );
define( 'LOGGED_IN_SALT',   '06(p#=3:jzOeBMQq~M,q1*_Y5*$?o{t2l88p-+p1s(X*~;oU;d:o~6e`?`7vNcL:' );
define( 'NONCE_SALT',       'l[D2d ,B:H(d8yvWJOsI-XLX@cMtX :A#W3lB^IY3;4viCn)1&Y}o.,;TH03`_KB' );

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
