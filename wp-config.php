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
define('DB_NAME', 'Sql1229100_1');

/** MySQL database username */
define('DB_USER', 'Sql1229100');

/** MySQL database password */
define('DB_PASSWORD', '33p8274213');

/** MySQL hostname */
define('DB_HOST', '89.46.111.68');

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
define('AUTH_KEY',         '9mdqhukk9x5wuun4bgktnd7dwc6wuiwkbew8tw7nadsmqwsxfc6iejebf6bv9s6h');
define('SECURE_AUTH_KEY',  'csfkpfrrxsqh0dttbsvg2lkhvlbt8aeder51iawd8cjwxlevlzsmge6jquzswbeb');
define('LOGGED_IN_KEY',    't7bd5sxl9nhbpa3qjanvs3v3uiaoe9l8p8jvytisnhhtu7oloox7wmmvndcbu8i3');
define('NONCE_KEY',        '94zvvakoejsfh05dszplw9lxupmeeqh2y6b5xunbcitbuwucz3luarrwpui9nfrv');
define('AUTH_SALT',        'q2ghuhclfj5loh6su2uzt7hdpj5sw89tmlohvvmbemd6jbemryxhk7pwqycmni3m');
define('SECURE_AUTH_SALT', 'pnarvxapmrehv4abllk99ozptsxrhhqm4n7lrfoosfon0wzy6omq4rnmhfgpgqf3');
define('LOGGED_IN_SALT',   'vjkkt59wfq85whjmckhvbnwhiipzwrp14avl4mkzgvhtuypfl8yc5wnj59nvove9');
define('NONCE_SALT',       '7kiohr02vv9mqqhlitukecuiub3eodsowo7nyrnzvcavqwlryzcvorhwmuagmzcz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpud_';

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
