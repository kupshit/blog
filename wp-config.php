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
define('DB_NAME', 'sampledb');

/** MySQL database username */
define('DB_USER', 'mysql');

/** MySQL database password */
define('DB_PASSWORD', 'kidkid123');

/** MySQL hostname */
define('DB_HOST', '172.30.55.199');

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
define('AUTH_KEY',         'ZSzt;wMTPF,7DF1};|Si.nZ^L_VgRE@2F6#My/@*3TkH C~(@}T{bRY7QDDnmI9F');
define('SECURE_AUTH_KEY',  'I6;U~U&(|wxxhB[M{c}Y^KY[|&HX9*QC^pZokMbz0l!CUFDoErD5W#JQtRxV[q5z');
define('LOGGED_IN_KEY',    'f&]1N5I^YS8uf;dkE%X=>K`0;KN7yTg<9d-xE)>m(e*;6}6N}uW|l`5(j~Zk_mzG');
define('NONCE_KEY',        'Nx$ 4fR>Hg nYL*n`0qz7G/1Q=b*53CeSmeTw+X^#Gn36HCTL.X*CU^Y< [#amIx');
define('AUTH_SALT',        'p>(vs57G:%2t^LspM@MzhK3$bfG[Mc=nSd{T(`>^6PRsz98iZ=,Aq(RSjBJoG1`|');
define('SECURE_AUTH_SALT', 'daA&_g)#8f2f>qNi|ISbfcr&<^JK[;93;:byON<L}9]k>tc4}NU_^fT(%9Q$-Xd6');
define('LOGGED_IN_SALT',   'Txc=k9IKR-x*/FlX1%ViBG3|(g=^#-*!dV4v5(u`PZw)T-+]ZJ.% qXZ#nZ#Nqie');
define('NONCE_SALT',       'P:qDb`}(yebe(RpJxl-W(U>G5&aSWX}]{ulTSc48^~C`-qLl6p)r<-[Z&G>h?-bw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'duc_';

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
