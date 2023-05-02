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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'textrend-brindes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'du#G`*n]}0j;<ys=|6yJ8l$|u_brq65>xD+_v#.-;;yBGG%:Ei,mScre:&=Bc}@h' );
define( 'SECURE_AUTH_KEY',  'wTbZB{sK5pSLOj|J/30p=:mEwH>:dM[ia7RaOw<~gRID3[n2E[vIy986%[::#sIb' );
define( 'LOGGED_IN_KEY',    '01;K8T)X+fWEHozlpD+D)TI-ulIom5;9`A[zJ_Ix|,$WK/V:6bskhj0%m_em:V?%' );
define( 'NONCE_KEY',        ':R^t:k|3%n*okll!!iC}82N=ahqY5X[8_ICq9@aR ]!4rdvW]GSU(sTGNEqs<JpR' );
define( 'AUTH_SALT',        '%jqH!f4Jce2cmKr9&PUb>F_BN41.76LB(wsc{UWITN@f~To+BP4V`.uK]FQk1Oh_' );
define( 'SECURE_AUTH_SALT', ')/4.H/-fD-9oXh@@+5D$IY9dO[J:J9)c$fpIR:{K(371(pE44{b}GLU!>+b>&7vp' );
define( 'LOGGED_IN_SALT',   'f;?%KlA}HoFvwF2Bo4AG9nqI>^Boio7USzLACHGl^6+irM^0s-a[$w vTQRg9y_=' );
define( 'NONCE_SALT',       'lE)^%WV ]b,YQt_40Kv3F>wOsF.d~~e(Vx3[KeFW`^O89?tvl:;7~S|J}&f?iW[e' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
