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
define( 'DB_NAME', 'meusite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#9WI8wq1tl&gtc9ktx~N8@-.~qpGeO5WW98|{5XX%Av)(B]2%tXVgZZ8]Q<y.t*V' );
define( 'SECURE_AUTH_KEY',  'z<3K@~bnbVh{Fw|G8:f!9!o:]n[vNFLV:jb.F#Ra6[+N?{PEX;cf3W%Hg]x)2ze2' );
define( 'LOGGED_IN_KEY',    '/*UGW5P:l9TJa;uW?/tdqF&cy2P%_5?xZ=}M0f0SeLzm`fGW1if6};~&fbzn&zGf' );
define( 'NONCE_KEY',        'i.v5p}|vO T4E?{Vqgt<:5&Lr@`De}N6toW38~~XfH<]P0V5Y]=rqtT,ZYC5khw5' );
define( 'AUTH_SALT',        'wD$u]}k,]D>GbW<3@tWL%t4xTaJ?q}}s)IG5n|/.ddNQ~jIFzfT6kl.}6U-ezG#p' );
define( 'SECURE_AUTH_SALT', '~K0?B:/DEk~#!V0yG,4Lpb?u_%-g=^F[Wt3x]fb-MYe&W<m?7c4iG(Ty(,TdpERo' );
define( 'LOGGED_IN_SALT',   'OG!|)(6X2b0:z^(2F/]_vLM[,`1vK=L8#[b~Ln/S[~OW@+3o!r( Hb+6])f5p{6|' );
define( 'NONCE_SALT',       'UOvloMKymkk|fdt,kU(x&CEIkWV8ggC^5rmf`(/kCsKNe:!rFeAhxM)/%Kz^.LCa' );

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
