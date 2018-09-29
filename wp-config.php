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
define('DB_NAME', 'won');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'hC[ah[bIF{$p0XZJ Z|4lUZ4-XK(H5~f3JS}hSiNSm:Naojmv#3am%ora%)N;T>Z');
define('SECURE_AUTH_KEY',  'c(TMh]{A9~Lh* ?WOdAQE6/jqJuqsu|etl4r24rTZO~pq(Q(*R@.CM1-u_;YF$hy');
define('LOGGED_IN_KEY',    '%NH%WC;qa&ai*,65{xIslBHEwZ/;b,=T]NtF@Ln|Y(8dt!xic+y]Rc`9pO rBT5+');
define('NONCE_KEY',        '[,JASeKA;}3?p>Aq=4r,~L:of>m5+-Y0JA<^egti1^b+MThE8mk}d8=:PrU-y&WT');
define('AUTH_SALT',        'CuE S[6r=ko53:nTp^6FH>kjQ|]x#9Zmiel+Un&1r? jYw16M-;jn|)&+fR~T^uK');
define('SECURE_AUTH_SALT', 'H2C>q{7KS*G^+b~qS}nP3H>VEUf_uU.84Jep0XeG^E&.<1_3.t[[oaQ6vuJp4oE,');
define('LOGGED_IN_SALT',   '3Pi53A{bU06p:o#8huI6EjwQvsBrK,Nn_]7rv%:B6JY_!,$Ui4eJTG?UxE3p0#@z');
define('NONCE_SALT',       'O*f*pa{D*GNx~qQ#Y1M{(``RFA<Qda>^ohL$FGw/c/_os{}T|kW)~ *,kY(UG!_4');

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
