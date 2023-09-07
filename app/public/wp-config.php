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


define('AUTH_KEY',         'lMMSYBA8RB4tRdmIGUr19+PTiNVV3GtecGqpJUm/tt7ie4l7R2d6oRF9AFn8fFAOalEimTzK1D5QRm1oHuhxFw==');
define('SECURE_AUTH_KEY',  'lLMfHI7TizFG4rTKJkGI2l+JkpyWjqTFatYFn/UIEFE7x7TsSlbAkPJ1QRvRIOb0wOAVL2/sNVliwnL3fs18kQ==');
define('LOGGED_IN_KEY',    'gC3T2ANuW8W/iYt3o5fY67Hua0KmYAmxJLCb+KwpBcNk5m/2MHqyHESQ85qsKHw73I9yZSN9R5V6i5XzyxrPwA==');
define('NONCE_KEY',        'o+0YWLcwoLcqgU+VOW3SvEswanQstb8lQR2AbM6OWglDg7O7K+8OKGbSqcZfR6MhHwyirUWj1duHmFRI+uG1qA==');
define('AUTH_SALT',        '1cehxs86Ci4m01Jrbty0ykmAlu2SGiAGFZjmlU7OLW5r9CpBYMtNiNLRdd0IPJdUfoD2svjCnMiRaLbqFc8ryw==');
define('SECURE_AUTH_SALT', 'zjPw5r1cU4Fe0ceBxVPkKt4ksxpstZ3IqAtaO5DBJX3irxKf8euB6rnIbcCWhZQb+z6OGHREK9Nl2tvbxgQ9TQ==');
define('LOGGED_IN_SALT',   'V9p2ijyC7lAB7VblZXt9MGQbTt5wSioImzthWh0icKkgOwQ13E2v8TeUmLBjUcLbnRf+PAIBj6SZxgUOsD9Drg==');
define('NONCE_SALT',       'ZMFNvSzCt5l2s//gv17FhF8DEY4nzUmvDIZdE/fg9KNbiN1PggIuTGpQxaisHUYAOSd29vU4uBOYpttft1W7uw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
