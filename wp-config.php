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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '* o% :@7W}XBs{+WM_x4>DJ@f9ekQ%$%y<O*Z1+A-WSpb`EOdWJSe-IW;GpgQ4(7' );
define( 'SECURE_AUTH_KEY',  'XpM:3W[.i`@)I}iG%~f91$MM]m/9FNRf-9;Wg<[uR!l5{S-IMlQG<:=^lCHb=[?X' );
define( 'LOGGED_IN_KEY',    '-G%l}cM-R!6q3^1Y_1)jrF,`G~Q=)Y/rcdAEIZY*#9Om]ysFoIRdYDZn;~`Sp$i<' );
define( 'NONCE_KEY',        'ST{,`ZP,bD7y*=bNM)8G%.(mdzk,VP,ZavS,Lg+W GkVs8Lk}4HueZ _mJ%bViCV' );
define( 'AUTH_SALT',        'cs9CB*;@Za03y7B22BC8!wg8~X>X%O^*?dOPJ7nld~ufq]QwA]h5|gP Uyygw)s(' );
define( 'SECURE_AUTH_SALT', '_X#4Z!+co66Y#Hat3DGE/@tNELs==Nyv`dCDSSF{/#{Cg==k`ko&E;hw{4*7Ad>A' );
define( 'LOGGED_IN_SALT',   '`LU5:7P3SrD}PFzoU6F{W{Uaqz@[I79[V[QKTHAtxSFvc6h`UU2=9{(Cc3s[cDVu' );
define( 'NONCE_SALT',       ']5G`e9jfn>x6=q?qttNuY`61W18e e*(28z&aS=aGye.:pIn3 F7`1tSt2Z^?r/?' );

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

/* Multisite */
define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
