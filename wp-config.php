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
define( 'DB_NAME', 'mominmobile' );

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
define( 'AUTH_KEY',         'G&x}8sNKkvt/eBeiG?]c~]=%Hb9:DmV6j7o*RO=z^xAV;a.7<Iz6y3c]BxEy_!6A' );
define( 'SECURE_AUTH_KEY',  '%,L>%OmWq/BVVs5haxZTnYlb_c}V*7M{%+<]lM<v[4]rJl`)>g2oR35$RSf9NuI}' );
define( 'LOGGED_IN_KEY',    '81*|NWVj3nuecU!^~GZsAFYFf-i{_X{mM<%y1*$B4$A7XQMShR.3yBRJtdqtT[z<' );
define( 'NONCE_KEY',        'b]F(Hb>;hi[zbp:1{ZQm1hNltwifm:wDv<EA,ervZ4H+_*e-8kX>+&0.i 0.X[vm' );
define( 'AUTH_SALT',        ']IY9<RxiR1@%.7TF.j*gVN03[nKzgDOL9lYEoj*ZCHtI0ja.~xBxssLza`}Y#,8%' );
define( 'SECURE_AUTH_SALT', 'Wb?6!3-kZmQ~_2J@Ra_wUn9&P6@Wpv7hgJJtn`P07-&3(xmn!.H8,I)||N0dTP(!' );
define( 'LOGGED_IN_SALT',   'dvF >lW,_;{]Zi((HE82~w8,`Sj,jE3P8b^s&*gQOIL6x@?lh`|C(2*Bz,fRc;nB' );
define( 'NONCE_SALT',       'S21}.vc=V$z,8y-FLEco!}lB#TJyl58Qpr9+Jh.(Wj`qNk2Tj,B-mqd|8gzGY*9<' );

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
