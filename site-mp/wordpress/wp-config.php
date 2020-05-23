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
define( 'DB_NAME', 'paulo1' );

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
define( 'AUTH_KEY',         '.V`)xJQ;&vSB^-,}wY5jUbv_4.J9ohH0qTB3/(bh>%Fp?4jJ-s0Upi51Z{JDOvIo' );
define( 'SECURE_AUTH_KEY',  'pLan/Z}#-[s]vS:))WTA*nU7lJ/|Mx,Rbj^yL=XI_x-y_TqPB*ji R_{xL<tF#2r' );
define( 'LOGGED_IN_KEY',    ':uQb8Jf>&R4v~kb2y$XmVbMNkH50kDR.]tcdW{U^mYmC7nnumIfFPg?t$X> U-L1' );
define( 'NONCE_KEY',        'me=8t.:c]%#d2Z5B0H5R,td[pa)7zOQs%z%t)eI,Y- $b@`_Db2,n|43+KPrj9[~' );
define( 'AUTH_SALT',        '$OG7hy|ZmXal8=swGst/VuQq3s*j/%Ktj.]k#488roCgS}$j1L  .h&5z+dbQ|$A' );
define( 'SECURE_AUTH_SALT', 'd+zyFbt7;K8{_RDP`_kt=O{`~t|OF~=?U/H]|{%7$<42%j5PSss5wpKMg*gCn];~' );
define( 'LOGGED_IN_SALT',   '0mSu|!`ZTIl>,il]dreh9wph>nV$p&XWMtq?)B~*u{r9jARNu&XZZ(/P^%q=urQ/' );
define( 'NONCE_SALT',       '}x{SRNsF_Aibyv/3u*F;O-g4Hm:]x NvYZwTn Agd!sHu}fw?Bs6/`X? -zNQ t{' );

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
