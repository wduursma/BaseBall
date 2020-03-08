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
define( 'DB_NAME', 'bb' );

/** MySQL database username */
define( 'DB_USER', 'wiet' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '~{^OT2E#%g4A-gRWCIZyy83t viSstdML3b2&v7T`a6j*NH7S-:mo.su)xS1tP.]' );
define( 'SECURE_AUTH_KEY',  '91k_@Bg@Yf;*XPt^l(9m(<O<1sNGH(QQaVLhkm08p-kZe)UwBiI=i]3`O-_A)F7.' );
define( 'LOGGED_IN_KEY',    '4rE*zH0CmnSV_RC}.tn%AiB.S>$Lkk{x y&NBb@sE48i_l]Ese3r/GD#]4=mz$PY' );
define( 'NONCE_KEY',        'KD>Ibo+9dhO@h3c{.iwP<X.PE6)Z68-UpXrVNH#cf>3.vRs$Ph#X]o(;OD7R-Kt{' );
define( 'AUTH_SALT',        '[NFW8RA1 }FOSq:Z@y6)>*I)%l&5hU+<[{}=B4E,pY+Bz4[f+;W{t*ie]NM>eQ;=' );
define( 'SECURE_AUTH_SALT', 'v$G8b8Q}6x9$U|>6^pT0c9!m!/h,N!jSm;[bp_rdl}~GVDDs&,0&QhibVQRog8/4' );
define( 'LOGGED_IN_SALT',   'a~`QO?0f?9$JosTCz)bHNLD0&W-=jQEH|%?Z8.k$uw3oCHm@vswdh![hbZft&rb[' );
define( 'NONCE_SALT',       '8{f]U,S9yk$q/sqd|f(%fT`IX3>)?IrLW8W&/{j/(D{_}*x)AKun6#F9? ch.9):' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bb_';

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
