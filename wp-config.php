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
define( 'DB_NAME', 'lamlinh' );

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
define( 'AUTH_KEY',         'sOB0:|g<6u=2Rhu~D/{r+;vH4,-;FoD.SxkUL9Zk-,G}bPO[+HSAcp.WTx:N!kPx' );
define( 'SECURE_AUTH_KEY',  '&@U?.E/%$kv[sc0a{]mv^evG3xz/H=iEL5s324oH?42exz<6_+dO8d-Mn@wnN%ti' );
define( 'LOGGED_IN_KEY',    '+!Z7/I)N*;1R/SZOx308)##Glc&Ye<oTW[KV&Yg%/pAK|z|.d;OXt$;@,cHx3L0 ' );
define( 'NONCE_KEY',        'sKjIzTsH X?.*CJ#b&`kTvoCi%LHFwkq69IGfli<fX42Ij#y8`3v]I+e7$kRa&ef' );
define( 'AUTH_SALT',        '`S.,k&9u9O3<ty0#~QF8UpbK.reZPmu&-Gt1V{6}::ploRji? w6c)gyUNu7EI,e' );
define( 'SECURE_AUTH_SALT', '|fww_Smea9I^0x]ks%/=IgYQ?opjfkdlC39/4~pW!:Enwf?^j(p)S{&G@7|Ek7hG' );
define( 'LOGGED_IN_SALT',   '?3J{ZU{G~&o2&=n&HU-4qmg_jFUG8.t.=6wH8T~^0{50m=RSr!Bn*(#cGaJ&0e+h' );
define( 'NONCE_SALT',       '.QqG79i%bX5j]j&/=KM9C1}PMKEngDIop@=l^MHxwb+t5+(T<s[WT!&_ eeb%`1L' );

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
