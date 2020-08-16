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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/S6/qc+Hz1snu35ZsQlIzmu2KsFG4imerSAmShG7bOdHJLyGgrbzCA3Os6lB3x3QfuaRE+14WOHeONfjpwO6wA==');
define('SECURE_AUTH_KEY',  '9+nCzgJtUIVsf9eMJEcaF/WEHmK2cyL/vbUeb8lXyos11VhFgKICDK2qvsmAcd11qZ+4D0Z+tUMHC4k1LLJPWw==');
define('LOGGED_IN_KEY',    'PvNjQhU0Yuz7NDpga38K4GAbCrsY/cPmOdNNsglZ+tqDoluO/UDEehdPeIK2Rk1cXO3gDpP+jiTW7nEaDqRn0g==');
define('NONCE_KEY',        'EhDmKryFtdIJ+49/7h9miG9N7j2dyQ7O/WvMksBdD69vLlTpihDB/zr97LKBv+mfOf4s9xOdd6FLHo7dmjzoFA==');
define('AUTH_SALT',        'MKqSyNh8g91LIhd7/NyTkaJ/tCAoyQwvRyUPkv6BujXLm8mzELkEJgmw2NqUPjeS3Fc6pr7ugKXMqbiU3qiZBQ==');
define('SECURE_AUTH_SALT', '+MlpWEccU0YWLhyGrMgNucS1FrBcVPAtKc4FAz2a2fhqCGWt+yQrw3/x7z46vxsh/lKo+IdWiiAz251/onhCjw==');
define('LOGGED_IN_SALT',   'scrQ+1AuTnedGhVRwGSF5qKoT3/DRW49cQJZdQhhu/XVPPO3UheeTDqbQE9ax8ZODJIfAvuYs835rhe6+lGyRg==');
define('NONCE_SALT',       'Y2QuanTIcA5igQFtA4I3KWEfo+LtJHYJAYK14qi8lGqkjkOjfyQmJcJN9v9pICg54s+oxjaJTpoSpMCfk/vQOQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
