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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '>UPzFX9#/EGpy*9hwo3Ho2Zv4hD?I2)ZUL2<Tgw~!1h142jfWC,3Hn37?}Av%J6O' );
define( 'SECURE_AUTH_KEY',  'C4m./NEyA%Gb<.3!NBvxmg05uE$[4$BRfy3BCIH~EougZo}KG#Ew<hy!. t+f[r&' );
define( 'LOGGED_IN_KEY',    'yS6[lLr8lT/,A^,0L4*/YoicS6vb0RtsguZz#@D=Z-@.7xO0WRH)&y&WTAv?U/-n' );
define( 'NONCE_KEY',        ')BUDAT{b8ORztl7y?ZI:OCkK1tjbbc:a6;4LVOZp5Jp7iDV5.&OEpFKUXq OYe*N' );
define( 'AUTH_SALT',        'Tu~.vJeYyS~@L,t2V)sfpwdgP5m5RYNjd!q}LqkBU]^dSFEEm;7&~0z7#67T;7jW' );
define( 'SECURE_AUTH_SALT', '2Z2h=p{r+YjSCkN11S5.~>v(6*DA|8Z!GDmVCAqGwAHtT>&pOsb,aZ=Ppswt?s[!' );
define( 'LOGGED_IN_SALT',   'GcJ?e(hVvx(q;2X5Z?8T_IG$pG*8U~0E/A=8-;4F5++j!!^m<o8QUp9%c[CC):!^' );
define( 'NONCE_SALT',       'OZkLjrOM0 MPw+nnsPacqqEfo%AXDsI:BuOXX0L2;qh~gQv5`Eg7q||56?{%:jy-' );

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
