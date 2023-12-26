<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'dental' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&Ej{i(Dxh`|T)5A*Ua/-2{01no4R*:0phiNbzk%HC7yojx3&#*z;04NfzS;oC/dl' );
define( 'SECURE_AUTH_KEY',  '@lLwCv/INyb4.{&&*$@R,-(}Jbm8)|<OgJl*nQb[cG2hw%ktyt>>fD1)CO<!@o+(' );
define( 'LOGGED_IN_KEY',    '>=iRRu:*]+M$<EL0x7+~?Q&PLW=T3iCnSo{+CWkN#oZOAm-|g6(bQC_<%Fk0./a1' );
define( 'NONCE_KEY',        'lP1d?`eVS3eieZ(.Zg%$6~1LvGX{`er_k!b5:61e^19?KtlntK/sd$Cojjqglw(i' );
define( 'AUTH_SALT',        '~;vT`UlA_91Rb%p/y|8E9mbat/w$xhZmt6Q~2aW-,&?y4.:f+:?T0[<9{bDL^&Xd' );
define( 'SECURE_AUTH_SALT', '^QP-DyrE&wC9W 6y/c6$P=Dz3:hEa>m@5dwa ]}3T]iJO]BPCO#I/%9P|?Ixr&R)' );
define( 'LOGGED_IN_SALT',   'Ap_}p6ch0kT=$(x@C<~ApJ%m0h|*om0q6}4G/Fb8zj3J%P!jsvx<X9d]-4fn:ug)' );
define( 'NONCE_SALT',       '%,(`M*yAKPT<O>}Q%+1p|hU/xba3@#qiqE}`&@fla/4NDUFf?VFi%IoexfaMW Sp' );

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
