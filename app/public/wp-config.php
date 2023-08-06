<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'huxoxPZcYPoZ+MY9R1LP8fkN5H+FXXsqCXkoiZEpkPAaAcobeUPIqh5cIW+/wB5xhuvcEve2h4nal6rT6v8nEA==');
define('SECURE_AUTH_KEY',  'y5tlq3+feClITxTCSjz+187REizqP0J7IcNWyVl7ccukow5FOILGXqv5mW9jfuVE3HJddA6FfuIZveW8vbCtUg==');
define('LOGGED_IN_KEY',    'eSTrP11mUodCNpu7WI9YpSYVSq/ZydYIVBIl+JZmTSXeiqDtDasqkK7Rhz1nXKHq80Hksg8wk1YryudQfnXZtA==');
define('NONCE_KEY',        'g8A9cR8SQVWprX62LRSPWvJFnI7LjRyVFwGiNqWGL7Pf+UhwjRFeXTSF5+WxbuiDCFzHvnjDShvWBarYuE15Zw==');
define('AUTH_SALT',        'cuPjRp1fDQBQIJH9/SJJ2UIe+WnSlCQdApPUA+1RW90ktuElapJAWVpTLylLX6LHwp10XZ/LTRUld6ceFSCWOQ==');
define('SECURE_AUTH_SALT', 'IPlZI4qd581PPr7LBG7Xcrh68Qt8UwogE9GlsZTlqTtbk2naxF6RSIdXoGcNY4PVRzAsaf8bSkzQbJm5ZIO3Jw==');
define('LOGGED_IN_SALT',   '0FSjuFDm6aXtd62BhjhhwL8OIcQBjZt5B4H/QtjyMI84W0oi6xQCrtWG3gXqmeRRWy5gAIDiwmFqzdAanqNB4Q==');
define('NONCE_SALT',       'uDlgC1Tlpl4SsYoijno8zOvKTnZCk54n8aoy+9EXYTZkBxU/bfAw95DPputuIKuRdCpAFuLdTOCt8eMzD3TkUQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
