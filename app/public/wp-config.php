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
define( 'AUTH_KEY',          '5F,fLX-yX)=NQk4oD,6PeO/Yv8Jkp}p$HkEptm`<N3K:r;j2Gy|pnvz0[-:lQ?(!' );
define( 'SECURE_AUTH_KEY',   '25=RuhC#&3<p=;]qoEyT^.Yx%o$,+hEdp-UTq]>%m)Sj8G@`Ae>@iFN.}M?pjwR$' );
define( 'LOGGED_IN_KEY',     '-jjKBJQfd7duFFV]M:PT*drhRG<i#7k7tU25N[-M5VBs2DQA ufrCPQq)tc>iT,U' );
define( 'NONCE_KEY',         'qevVd|l+EvYjYQG_rdMg4Jue1L.3yj~L+ea6+t@FnNUj.r5T}CId[31jUR;1$|nn' );
define( 'AUTH_SALT',         'FO(t02@|b3{HI V{W(:t[)[)0J|*]XtrjL3Kek[#fy4OuyDM;n7&_1uKaFjdb|4q' );
define( 'SECURE_AUTH_SALT',  'WIJs_EbuLZhpe+$~W&[`c`+PI|.Di)~w9 zhT|,UC)tw;zJc}Sxg^(*gyO $*ofk' );
define( 'LOGGED_IN_SALT',    '#$lvm_e;HdtI/1ncirh>EVa1vhdLdv,;`f!}]]#-P_Qif)04;!gsbOm-$]W6lFZ5' );
define( 'NONCE_SALT',        '^;`$y#u+eDmr=Nw|k,[c9~.6eaa|*FMwK)O}0-BZKLcvEph|9+g4ZA0R}qvV*Yd2' );
define( 'WP_CACHE_KEY_SALT', 'PlzkSg{R.!F;TN[E#4j/If=zs:~{XQmurSM*EyH9^:yg!Du:l8[Bi,6L7eFlA`?0' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
