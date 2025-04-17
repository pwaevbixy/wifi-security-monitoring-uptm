<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_38568033_wp829' );
/** Database username */
define( 'DB_USER', '38568033_2' );
/** Database password */
define( 'DB_PASSWORD', 'Ap3S87.4i!' );
/** Database hostname */
define( 'DB_HOST', 'sql200.byetcluster.com' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         'rpok9fsvuyq9ngc2odky0eojnubxins0dg8qs11ajwvbsfic14h88riostgmx18r' );
define( 'SECURE_AUTH_KEY',  't5thhc6yk52w8hso2sp3lwnp7rvqhhtdfcudnkdjpmh7tfeqzgvfuczmgvsnpflw' );
define( 'LOGGED_IN_KEY',    'xy3hjta7eeuqsycbqv5dfgmkzlgtfam7y1fkcn9r4grfgzhdjcrvj4dogtsng8bn' );
define( 'NONCE_KEY',        '0pwns3sgrk8qbpjrt9mkwpvfmd22bu7dizd4mdrljq1lo8nyxqpttlke9lqivmyr' );
define( 'AUTH_SALT',        'hufjjscbytkc0rqvtjzaueyqnovpy9fvttwzvoudtkkerrpnpzdmrqn4lohx9cse' );
define( 'SECURE_AUTH_SALT', 'dztmmwvelj7ffmbucdxamzdcpy4kspzyiovy5nio44bkcaugaxzj36kwcrdmk1yq' );
define( 'LOGGED_IN_SALT',   'lrpmqyda8ueohrh776lwvykiv47necipooqzoxgaxjf9p3jvzsmpuq0y6cz926j9' );
define( 'NONCE_SALT',       'jfthi5sbjhhvma9bdanri8nvjdsitxilieiaokmtaekkep4qvbpyabrzicddzwcg' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpw0_';
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';