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
define('DB_NAME', 'techcrunch_db');

/** MySQL database username */
define('DB_USER', 'techcrunch');

/** MySQL database password */
define('DB_PASSWORD', 'techcrunch123');

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
define('AUTH_KEY',         '@V$3DTUj52~a4o}H8:)zi0Nn+]<~`fk.Jfr5HG*p_@fc.tF5e,::2%;ne<AvY.vr');
define('SECURE_AUTH_KEY',  'C ZB)9}x>+{OQLNrdOnjn$4Yzo&l!)RpOC/z]95;iD;&KPHwMPO*G74?]ik24PD5');
define('LOGGED_IN_KEY',    'lm1np0mWuUW3%l~eVih&((PIQ~<.nWw+y-554;]`vm%?f+r>FO9k %<D6XKXXu2c');
define('NONCE_KEY',        '^:A*jo$n5MPdMhyT8>wx(c/eDI<OtZQ@>**KX`v8lEBLcGC+@@I;fwG99`3Pj&,M');
define('AUTH_SALT',        'o%o-X&k{v9d_a.=4pE3oCt]#-O 34~y^9Or<HH@[zbg, hm*9EN mSKS+,BDu,%n');
define('SECURE_AUTH_SALT', 'GjUk%EG[ve:ob7<?X&yQ;G3iL3Ul7_R+b(jB]GW. {)sKrsUeBcGFs&rH!rFRYZ:');
define('LOGGED_IN_SALT',   '+,;(AH0[,+e5xcjjTM`BTu$l_8]Pykb5?1kRBR:nKB[b>7&6&%}`&YURAtO&A?f2');
define('NONCE_SALT',       '72omLPrqe5<{:p|lEA<#zYu3vU|lk4G0ND8$C HP1qY_?:WZcjOwdyuscQ;0qs!Y');

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
