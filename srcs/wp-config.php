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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|r)Qp`Z [~A@,^-m:w3)cMp9Ua+3j/Xcds+i.H Io&mlXX7F-!^$a`&#&6U~&O|7');
define('SECURE_AUTH_KEY',  '9p_l;?m2pA2~,.jO)-u` /A>{NUWLJMO-^af@(oqUR>g0g@X@.+<5g-B0^c+OJ4u');
define('LOGGED_IN_KEY',    'P|l%2/Kag`[Wh!3sJ5+-{7Vj~ vR/sQ!_PJ}On!>,+gXn]=(Tsc+uqv?5t-uh~ M');
define('NONCE_KEY',        'Pa>.Kv{+D~Xn-C7d(&2nZP,Lq596W-;]`o-]vd(j*C+?`0vaRKf#~?1D-qlS.oEj');
define('AUTH_SALT',        '$Cd#FfLo_:@bah^&oaZ:J*Kgu`SI)~l|k*CTgq{}P4-On__~*0FD&+Ek>yqi>Qj>');
define('SECURE_AUTH_SALT', '?jLVxpv-%+5-+u.w.DAkk`Edpv=nD|BpnW?.EOetP FzZ|.i9Fqc@(e_u9CI#&,?');
define('LOGGED_IN_SALT',   '@}37%LvV@%%Uun$Q1JMpk>@J-TA4K+%^G-p=1XiSBgD51P-@y<B8LP%/X#J,BAp^');
define('NONCE_SALT',       '#Z_)iRn$h*cA/p9+-VF ISvg5[$[4qTp<qfgf }?wLm:g.N&N(O[k3ke/j20XV>/');
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
