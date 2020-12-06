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
define( 'DB_NAME', 'quirkbu1_wp979' );

/** MySQL database username */
define( 'DB_USER', 'quirkbu1_wp979' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pSa!32u!5f' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'uzowafnhr9qmiucr7bzld0siieaeqvymxgfwt2esk606ad991smwtotamm9te3jr' );
define( 'SECURE_AUTH_KEY',  'umkzkv3e0kbrtehymodgnqqh6jwrhuxuqbfqre7mqpvqxl8zr1ixunmrv0bknbhe' );
define( 'LOGGED_IN_KEY',    '0hmtss2qzma1auffpnotdfjlilwmnqtguif2atl63bofkmhpae8vpdvsptmn3hxy' );
define( 'NONCE_KEY',        'dhfiqfuvqvvdnbeahuob34n7ncntvcbloribouejhmbspnwfzx2rl2meon6pf1i4' );
define( 'AUTH_SALT',        'tnlydwwl833hscll9fejynywe3axziwei7hbqs7ytatgajufu4fvm6q4f5ullr6r' );
define( 'SECURE_AUTH_SALT', 'pirgvbduzi4d2dxs8ich66xgoues7tvd6y1jkdg2uybecq6lqzxqekh9othrgebz' );
define( 'LOGGED_IN_SALT',   '9wgczkhjtqv0mew13rhks3mvt0eeo3ik3khwpqdgdwxph65tilh9bpaungzeai5z' );
define( 'NONCE_SALT',       'swaqgwhnhe15ow2d3fgjzoykzmjjfcmbtjopsw033jabixpy9a6qccvehexbajcl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wplh_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
