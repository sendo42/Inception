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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '?8r-n_uHX<$}U!mtQL:EKXp{*REIi|@A|7nlH$(AJ1zdtcUjgO;^GfTQ5x#Du]i:' );
define( 'SECURE_AUTH_KEY',   'ZuID:/rpl[+!<L;2$NUrhHwD)wXJDI0,#u),G! SI-O27L:t0Vr3Di][!xc# WCW' );
define( 'LOGGED_IN_KEY',     'rNuyXg.mx<%bs=DMH5|;zY|1 54N`?t5@gA/Rty!e+?eK4d!8@@1p3B|.0)P[)^A' );
define( 'NONCE_KEY',         '9~ RBk93LhLvY$7q*o@q:O{/6D)^&|Rem<%J@]:MvU}VDmx%`jiXjQ-$bt0 h]h-' );
define( 'AUTH_SALT',         'vG&GH,0E,FJX8tw4aG4d E>{,4u~>^K7Xq3m%3g*V0hIQWvj~o`SG+Ka8h`I)z^>' );
define( 'SECURE_AUTH_SALT',  'DxC,zw`8IFiWtG.-t!x)u^S~B%4;2DkavXzM#+$X5L&^igK;D+Lh9&f t>?#>[41' );
define( 'LOGGED_IN_SALT',    '8_I}kws?re]Q005w/m,z5ag%Q=&cph#HEHg6_c(Zu5v,V!FF+SGhsk-Tjg7Zj3rV' );
define( 'NONCE_SALT',        'U9.WBV/)D1uI^(:6OA1>/u$.ufd/PUS1cIN&~,kE<D}Z./GsL~0X8o?t!]Ebr-bh' );
define( 'WP_CACHE_KEY_SALT', '(OlJ*R**)U5noo:`*5$ 1WnGMZ_B2=0euXA.c{b,]YAruaT(A{ic>q./d/;=eXC}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
