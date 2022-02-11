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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'oyJjcOXg13qIGTu6vEM3sjV+05PW37qsc6+kPAcZpBoHgoFSriWVn5nzw/Bh1hq47mB9hJlgfSdHXcBoArpkfw==');
define('SECURE_AUTH_KEY',  'Xn69zYzvQI9UbYtq4cBn0ZZ6jXaT0THa9UN07FLF/OiETtKXlFkbCXZeML1rcn9IleDtGWtdixu/enuRsi6FFg==');
define('LOGGED_IN_KEY',    'yeW+7ztGK8PSCmBONQqmrGMcxqdYQsRKIwzK/rhme0m8WXpHPPlPKBMafIb44ccfd847VeJpqoMQHOemiJgh3w==');
define('NONCE_KEY',        '0+JRzH2H5Hagab0JUqksXqkEhzq740hdXWSlcMfXFlHW5TN9EZT8/6PR0KIbFQH7Q+WATKMWQaE+p92PP+c6IQ==');
define('AUTH_SALT',        'KsxRSNPUsPSNzGkDO7e2Y2bZNxgD67T0ZwPE8cNa3pneK00BNGkZ2Ly8PWkuLrm92g7xzQtxrSi0anW7Ly6WSw==');
define('SECURE_AUTH_SALT', 'VmtFKbJLy0uYoU7JRYc/GTeQ+nWpkv83p8KAXejQn5/QD6BXmXLQqrQghrJCNhqCK7X52JrudlQXPBnQ7wRItQ==');
define('LOGGED_IN_SALT',   'eqwuWu9ajKAbaqY/X2EkOiI1xXjzqh3Lr2rx7OMqrEakwE2glm2rodD3RMfd30Lj5DAc+WyVZI1EWs81oC89ZQ==');
define('NONCE_SALT',       '74fUXYJMSwdWOk0G3fRY01x1NdNIISgwcyrUFnJN8ssLZHbZ5usP8I2OF7Er1AdjaupwN1HVQvDFe6IdhBeTyQ==');

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
