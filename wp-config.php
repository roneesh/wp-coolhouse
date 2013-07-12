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

// $services = getenv("VCAP_SERVICES");
// $services_json = json_decode($services,true);
// $mysql_config = $services_json["mysql-5.1"][0]["credentials"];
// define('DB_NAME', $mysql_config["name"]);
// define('DB_USER', $mysql_config["user"]);
// define('DB_PASSWORD', $mysql_config["password"]);
// define('DB_HOST', $mysql_config["hostname"]);
// define('DB_PORT', $mysql_config["port"]);

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

// * MySQL database password 
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Q/qIHfAF_QX<=#WLF|m+u[OpI{9b5q:3>M94ktInmc%t9Y$7pS1Vz87^wJo_ytW6');
define('SECURE_AUTH_KEY',  '-|*Q7.<cVayHWcg?0Gn/R-nuSYJ@YK>xiwO@dd->gUddT-kZf|`TVq3~<8cx@F.9');
define('LOGGED_IN_KEY',    'Z,)fx3P$~g|TA&EM~;{6{fyqNz/SDx-729L_67^{N.3l4pZG3tpEfY9,dE*tuHRX');
define('NONCE_KEY',        'e+aP1Q@w8e)8^gX-Ur^@lx-oZIZ5q6s5T2Jp#-[u4z$0p;5{DYPOYA_|6I09;$27');
define('AUTH_SALT',        'nGpOBCZQ|tK]QOz``KL WkB>0@#Y+=$=dfyxZW&h*2f~kY,ui+OiypGuC&^8NI.g');
define('SECURE_AUTH_SALT', '_ssHSBjsI11)*igytm$3*xv1ys8#E~?zz-coZB#dfm>It!2Sb5,0%H<:q9k#CpE|');
define('LOGGED_IN_SALT',   'Xqkm/-@khb_~U-8<-R{I6mI;EA?v}~/.:Aqwb)g3V5mbg9:%Yc4!^0wk@+(?^^BY');
define('NONCE_SALT',       '<X<-@iQB?6(X#Xn(-79LJ1ng-CA1IgR+0rH:LXu(If++N6dMM|( U!=jpm(:^@V-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
