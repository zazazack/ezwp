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

// ** Site URL settings **
// Modified per https://codex.wordpress.org/Changing_The_Site_URL
// define('WP_HOME','http://ec2-54-85-29-61.compute-1.amazonaws.com');
// define('WP_SITEURL','http://ec2-54-85-29-61.compute-1.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ez-wordpress-db1');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin1234');

/** MySQL hostname */
define('DB_HOST', 'ez-db-instance1.crul7kbagxxl.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'p7]BcmDz{V33SjgJG2h5(0y[:On*W{a0Js^=u1av&+06<=iYOv1hUzh>:?LRmfNQ');
define('SECURE_AUTH_KEY',  'c(!tdkoAQ>K$5UJHU8^X?oI}m|olY}&}JyA1*=N=DfU7i !+;J5c~q1&F)iYaOqc');
define('LOGGED_IN_KEY',    '0:[T3RLBN70a`7`;ugC[h}BHA&Of,W]Yu7O/y&mQ.|.Z?gk^2.`?7W?*CPz6sQo}');
define('NONCE_KEY',        'Cq9-6:`N3KD}})2NxbFf/Co.r5m!0X (wM6-:qoGVq2|e~XB]>ywkKs bPT^%2dP');
define('AUTH_SALT',        ',7$,c-h-YoNw]86+M{]5{%0Q6^ZdhQeF/>%hAXfZOnU^=c(88=/P_yR<@b%0CRW&');
define('SECURE_AUTH_SALT', 'qF,v?AwhxQg|w_%Ass IAv0?{Y$9<,6jf?W#yTb@j(EV|IA]jB=4p8Q<9G],6>Gm');
define('LOGGED_IN_SALT',   'gDe4oCE!Bo/88=d~0E%Z?CpW$hVqwjq+V)u7WG0hQaQ((BD*|*kihJxdc>0ixJm7');
define('NONCE_SALT',       '@4?Bxbe,[{%vH_#E9>=wOl;o02%uqx.zN3r&aSIIV_c~My&tJftmZB z 5Ya3AT8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ezwp_';

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
//define('WP_DEBUG', true);
//define( 'WP_DEBUG_LOG', true );
//define( 'WP_DEBUG_DISPLAY', true );
//define( 'SCRIPT_DEBUG', true );
//define( 'SAVEQUERIES', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirnam