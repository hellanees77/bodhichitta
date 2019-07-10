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
define( 'DB_NAME', 'foundation' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '~KvK=h!IWer+x^XeUOoEE<~&5fspp+=vDy,&<`AF{i&s/3|}ODZ0sMPXu~ k>w;W' );
define( 'SECURE_AUTH_KEY',  'P@b_8fg>lg1r/W lOCeT*X{g31{u,FV(bE,1Jt#v6n>C!l9.mX(66M~N)WY`I-V`' );
define( 'LOGGED_IN_KEY',    '.3!p{z~^O-JYa1umoBjUkpF`I6|+!Sra?orJxiQk[CJ#5Ht84b>yLOl;_|`qFuz-' );
define( 'NONCE_KEY',        'f&U&6`W_Gt~xf| :%qaD?2$/8eR97 ,u>^Vq2p@d`rPd<0te0]jYW?_aa5>6wI&+' );
define( 'AUTH_SALT',        'W0-kw@Z{^^+])B#?3`{Tsy.o+RP]6V8D`wgQt7[+IE<K,K]_k *2[$V:Lh[@.P11' );
define( 'SECURE_AUTH_SALT', 'xddu-nHJjTgCS;}M[r3~QpC5 .J6Kv`.pFe7s1BiPM=o,6qY13e$iQNv52xmc(X4' );
define( 'LOGGED_IN_SALT',   'H|:TnlswD^J+-tJu= GXpwr,_)4bR|%FPE/zem8&/d90WQmhLlRoo~.^97vgt~4*' );
define( 'NONCE_SALT',       '.;i[c:nJnk,D6obd+pL1rEl/JA~J}o7^InK4>AV^&}bt-feh<xFwv;j:9~LXkv5k' );

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
