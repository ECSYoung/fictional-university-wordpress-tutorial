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

if ( strstr( $_SERVER['SERVER_NAME'], 'localhost' ) ) {
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'dbme9x655bv2tk' );
	define( 'DB_USER', 'u424a8q5gr572' );
	define( 'DB_PASSWORD', 'roonohaxors2020t' );
	define( 'DB_HOST', '127.0.0.1' );
}

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
define( 'AUTH_KEY', '+chHy26Jj0SxR14qh9kBQ9FjfeEqZRb9JmrLubnuSkUtb6/M6UocCOc/k46HWR2969u6SdXvSoMxv0F5Meuz1g==' );
define( 'SECURE_AUTH_KEY', 'BBC5+SV1VNj8/ZBiZ2BVgkLOkjbeA/aZJdPaQ46zhzC7oo9PtNBCjROZ5U27AzaGO6R4M5aIjRWiHaUeGtFdFQ==' );
define( 'LOGGED_IN_KEY', 'M3ijYsLRPqJNw5Ip0tp3dbXEWQQRcT7hfB4f6BHXs9wKqNouB3QSHrHah4zRoum/f1on/rhXuNflSskihLWSqw==' );
define( 'NONCE_KEY', 'Q9A2yvnyCMd0I+H/ObA1sqILaRfb86kbVbSryPfWYC9VlUiV7UqnLn+XG7Ttk0jOc8yX5A5MBwlSmEM3JTXrrw==' );
define( 'AUTH_SALT', 'mlMVqwzLaGQp9CTMGeD7NdX/6X1o+tO4o9up+pOV5PCYT7VN4aOHRFUDeNYs8mVLWTkVWpE5mad6jJhcdF4nEA==' );
define( 'SECURE_AUTH_SALT', 'gNUJsqg+sRwKlp3uhMvyySXOYZCcrtOMdEQ8aWfIhPz3aL4Yu2fkC+W2Xj57p4xI6oUzviwOJKD0W68GChauxQ==' );
define( 'LOGGED_IN_SALT', 'rH/z8RKQoH3wyOmV+FhSCyaeDajcWKsSjOQhCVuoPVI9Jup2RtM/x4o2NZ6TSSZ9VbfqbBKOxihbX06q7tOG0Q==' );
define( 'NONCE_SALT', 'RkqyPgUxn9CVxI3ObBGyQP079C/tK5fC7fH7K8ii2cageZ5HGln3Cy2uoujgpf3IXM7ekOg5Lq9jSNv1fEyZzQ==' );

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
