<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woo_lesia' );

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
define( 'AUTH_KEY',         '`[bK:FAse#9v,qqh45I08cE}zP3#9^1iv6b91qk-8}Sp/)?=Mol3$FU!F)@n+dR-' );
define( 'SECURE_AUTH_KEY',  'k^Gn$?Ne|I;X^#FImH:7`cupW1)[FE/-#u%FOQP*^X3O8(hE#)5bc@+)efUI1)sq' );
define( 'LOGGED_IN_KEY',    'ZlGa18SjX>T|=<:L+Dz^(xFL)b.)td6hSW{Cp;V]LYSKLUvxY,Ia8QcFoP!9!Ofh' );
define( 'NONCE_KEY',        ',?]W|Ddcpy%8hAxwfcd$=+*A~:{S5CNkZNa|3LKBKK|/ID|TEq$*a%216+Z2/#IR' );
define( 'AUTH_SALT',        '7)@Iadx-~G=mM>yX]aLQ$0%i^;gn}L5mNc7`3e_pK0r,s`[:!M&gDR[.pU1Www%9' );
define( 'SECURE_AUTH_SALT', '13=84@jH2^,zk-ST.t|uAser5Gf9f([p[LqJBHy[u%#q!4M7#GoGI. |,M_D*2,F' );
define( 'LOGGED_IN_SALT',   ':>%k^#YS>P}T` =bVzt;Wa9[bMO]PDx9M*&()a*dmBC9~)$2z**:~[54Q#T)s7fJ' );
define( 'NONCE_SALT',       '9G.zLg=n|VGo_KhT:Yezb;3)l}v{HJN{^kE]pV nEtU+f_;1Fys=t[7{x~oGEc@p' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
