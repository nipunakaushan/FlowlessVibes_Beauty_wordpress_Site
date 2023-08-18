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
define( 'DB_NAME', 'u459076464_flowlessvibes' );

/** Database username */
define( 'DB_USER', 'u459076464_flowlessvibes' );

/** Database password */
define( 'DB_PASSWORD', 'Ni#@01puna&' );

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


define('AUTH_KEY',         'wExbWWr/JbJWYo8naZd10+cPwWLKwEbEwJtwBev4g2IrHGaYpz6atgBQSwzgcsBM6Z4EntsYWGaAsodtXdfArw==');
define('SECURE_AUTH_KEY',  'm7F2RRk7cvl1DZtTQlKVGxG0CiMpyU8Yu7gYnqZ34l5dIkpoEdK3SUpjIrEwkbowV2BC4AN6K+/xhssQJjDOmQ==');
define('LOGGED_IN_KEY',    '7wx+jknDLoPGQAbD5TzVWgjLVxUxQMq44m2Q2wSNhwxj6SsW+w1wVtuj7lRPPbPPTTNFcHIkYjvIX3d+YX7GQA==');
define('NONCE_KEY',        'dAQ28Cv5Jo2U8BU+hqsEQ2mnlhk2+OWmoaif1S/hS0cEBeHo3nnsjQH4Dw8t4/+MphoAgW9YrdMXOLPv0zwwXg==');
define('AUTH_SALT',        's5wSx1KEY9Nd8dD+UhRcZcIaZYNyxTtJQ6ikylF8EHQ6wduQksbNVuRjvzvdHJQJVXzlJ8JkJfjdJ9i53k/wOA==');
define('SECURE_AUTH_SALT', 'zjTdkM/Hh2zdc1/UwsviBOIokeLdgJIaqqn6+QqSppV6uNHtJft+Y2Gj6C0z5ZoRmVacVs4yqXhm0ctQQ1tW0A==');
define('LOGGED_IN_SALT',   'a+X19gNhcO+8yq0b2DSXE7FjJWZ5UQFz5+LPCGrXmxig140oEki18Z2ZPolgXWZmGkzQSPPlPta/tv6Rd04JDA==');
define('NONCE_SALT',       'nRxsdSP41A5IpQxd98/URYiA1esnphcnRan5hlj+aLOj/GT5RR/A8qXq+2W+EMZs8mQDVn2U1uP/z/fZgEkJxQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
