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
define( 'DB_NAME', 'wp_realestates' );

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
define( 'AUTH_KEY',         ' mZp]; d4*pX;MLMa@exud-PH&B IPocZNSO,Drd^_wV@)n-,)VC{Mb4Pvy._a6l' );
define( 'SECURE_AUTH_KEY',  'MeXf1Tl$-3Hc5J&5p,1{{^36Sud*wpUsou{@zu<12?O_ty=X= =zB&WzHw!p,6hY' );
define( 'LOGGED_IN_KEY',    '1]/Zq-D(3O;%0|wPj:tJlpJL$2ykx?%A:ms4K{ee%0XH_I45@tJKGKb/fM|/m:OO' );
define( 'NONCE_KEY',        '6tEI!?Yj>KDOo*im)^1b|Nq_/Y/v1.L6-1CJz:v4i|!I(@2m&?Q-xb[y$6s(]{J0' );
define( 'AUTH_SALT',        '0yv3Xm</EOKmn<LY7F2@l2Tw%*X0H,/WV=#/>y>1-I$`?*P2z.40o3rGJ#RGZ{#X' );
define( 'SECURE_AUTH_SALT', '7hYJ#B_yJKsMDqh+ pW0Vul=9l*|cQ73|j|jDu(p/*enpUq+76??#w]>u~81@PRY' );
define( 'LOGGED_IN_SALT',   'X@a:=D@5get{MX)/YHO0$w2hlFzJ,N8)PSQ!W`_YsP0X/Kfa,%hRRQEh,yzY2s&Z' );
define( 'NONCE_SALT',       'OI1Z4{w2q[a5W?_Q8}{0~- Tx,@7WhSwFwA@W6:eu,ZY&=-E[${l)n$q>V:$3$:o' );

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
