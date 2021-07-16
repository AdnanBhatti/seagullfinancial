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
define( 'DB_NAME', 'seagullfinancials' );

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
define( 'AUTH_KEY',         'Z&|~9#^I%X:A:RrGUJlW^M:n<`p`E(%=).UV=qJ:P^ UsUASO_;6-Staw&$AU$Y.' );
define( 'SECURE_AUTH_KEY',  'WJT4<!sA@5R+a&$e7{!;tB-!jZ~U$^l(_5_|`f=w@],r1<%jFf9U.d~W&@%/48K6' );
define( 'LOGGED_IN_KEY',    'p?xo$ZdqQ[u>%wE+W:5bvQol[Af.LMPhAbIekX`=>:YVFAtn{hT>F0qY8A5+Sd4K' );
define( 'NONCE_KEY',        '@+:=ON%OI/Lw32b80AiG(qUn<Q|]w]z|UW^`5/Xa;xlaLqElhl?V0}lx~?s.`dX[' );
define( 'AUTH_SALT',        'V+2y-]IF=1@,zX@6}cQt7hb@2viXc]0K{>ZVF5/K kNmx!]w}F~W:!Py?sCOk$l7' );
define( 'SECURE_AUTH_SALT', 'Og)O+qf.Tma!cn`veCW&d%xr;)}[O1?hv%._n2C5lo( t9z!t:&I$9*B<,qT5gKI' );
define( 'LOGGED_IN_SALT',   'FcheWl ?<pg?X@t5VoEYL Br;1^4+n^aU([q.p-Ng)~Viqb (0xsxTDlxBWJCLi3' );
define( 'NONCE_SALT',       'Y)uuWnp8salVTd`doGTx.5Ok6/X. aEF( ox`s)2UhKlaU^RA|*Y[.7p;iR2h=-#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sgf';

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


