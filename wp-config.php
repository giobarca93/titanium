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
define('DB_NAME', 'titanium');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%J:$;{fEH/Dn!q(h:pGo8sOC7*z&ah%%(dw Uh=<uRYFeC~i> 1D}642kO^qw*0U');
define('SECURE_AUTH_KEY',  '4LykV4}o&9Fj +a%7/x9tElx<Z|/~[>`j~Ya(G$/~$H4@Mf<zRoKP{QsCzEsSZZ<');
define('LOGGED_IN_KEY',    '}+A`!nK]D: :Txbro+t@,Yi%{pz0C;ji1H}nnx# ^ 6@hFQUub(wtxC$m/?rY@|S');
define('NONCE_KEY',        '[JelW/[GD[=#pr-hZY9`qmof@jF,My62s=j2ZDJ@! k(DlUhGybJD*Q!2l}uRC C');
define('AUTH_SALT',        '~]}f$L+BExucTS<]DIyUN$L*)f pkc8Z6C]gjt=K]U1mlBjK`t@pCIxSxGU>mZ`I');
define('SECURE_AUTH_SALT', 'hX_v9AO%jYnqZEK)8#|y&+nxqBDwW01.iv`$~;If.{H}$c*^%]8ZIJ`+SQs 9jUb');
define('LOGGED_IN_SALT',   '*z(`z7#F~NBC;{ARMyXyLg3/_eoBuH(tDp S-6Z7iHQ@kl=<,-4g}4/f=9ySIq3<');
define('NONCE_SALT',       'i[)CK0IvoapJ+e/0_~vxyYd`*9[H9mKs-FDn7uF5+cP Z+prRY0bjVJg@u`eaDv_');

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
