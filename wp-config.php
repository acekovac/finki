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
define('DB_NAME', 'storedb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*>F^N[-,JNLD83-sO0vE;bBT%=(@n;X*_fj)xu*Y{:tbeXY9~o%Llqbxj.5Bx,C)');
define('SECURE_AUTH_KEY',  'bk<}{2u!J*ykY_XVa*(!)=kfM|*!JeJB{t5W>:hRf0$&01KK-6[/LF#&V&,?oC-;');
define('LOGGED_IN_KEY',    '|n5[_rY?yUc<ZSKxg[?/[Uve/I]0Som/`1nq$,>I}gTTI{X1L6l xV!RxI)hY518');
define('NONCE_KEY',        'Z)b^k$!ES^KsR,&w_wMxHAk,y6OK4+wb)ySn=>.Zt@j{S8g?z9#MhYC+YRw)Bfl,');
define('AUTH_SALT',        'O~kkZMmK<naX}}-az]*9ex&4wpiE*%}^YA:>ORh`ST#nmrr7pW_^%lJz7,L#c|Ud');
define('SECURE_AUTH_SALT', '!m**s,I*,R,2v]5Otcb$;^8JwevO;~0B rZoZd/XtcqAyTrLSGZ)H9mcoIL)x~XQ');
define('LOGGED_IN_SALT',   'EO3Te}GSyfLKoi!z?D=X;gu2d^)5VerXAHjz9=6JqBE]X%+>b,s%5AOk)&kd$9U#');
define('NONCE_SALT',       'Wg(zW*viT&4ceHV>`-@|o2ILU8n{w(d9P<RVyklfon0yA?/_mT/~bBw-EH*O7842');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
