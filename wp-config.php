<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bgheader_dreamhosters_co');

/** MySQL database username */
define('DB_USER', 'bgheaderdreamhos');

/** MySQL database password */
define('DB_PASSWORD', 'vrvEGB-6');

/** MySQL hostname */
define('DB_HOST', 'mysql.bgheader.dreamhosters.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '03zgV!pNyNI8AXcz!aVY!tZ(RP0o%rMe&Z:o*iUvYix7ry?ssT$q_dKFCdp/uB_6');
define('SECURE_AUTH_KEY',  '^%OVwPn?F|Yt`CdxQT/YcK`|1%@SRNyTlo*8SM6C_R$rNYD(gC34A&vF^SiK))%e');
define('LOGGED_IN_KEY',    '1FtMc^9uAPJzDZTe(pC/`BjogmWHXfo~CmRz$VVd9x4M5MAH;Qr?_MEVWTW;^B$"');
define('NONCE_KEY',        '8BdGfwA|;Sa&UeiE^nOJU?pcduS"t""o(2:fh`GUaa5fr1)l4NuDUIPTgITAsLcl');
define('AUTH_SALT',        'e^uNKvbpWb?GQJ1AqRM"|0O;tPogfVDLR#m;Q;4io?1l&Eo6DV*I0V"TS0h)kf/H');
define('SECURE_AUTH_SALT', 'd`L|Ss!e1ZoDn|Ou+Ss9Xwsdfm3#z4kxD"Rsqzt@3l)ltl?H3V&;oAS8+^#0^H2N');
define('LOGGED_IN_SALT',   'KgQ4m0$aM_G/pcuU;F?0v_mW@SJ1%zlW7Z_x?$`H97bofsT#tqX#2cKEv;0N`6ue');
define('NONCE_SALT',       'g#V#CYsjsMzP^^b1A0PM8to?ofsI9J&VQXdP!%$$uimFDiUUO9x/6mn_%`3(/n:V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_6ivqrv_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

