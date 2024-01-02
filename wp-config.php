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
define( 'DB_NAME', 'wp_custom_plugin' );

/** Database username */
define( 'DB_USER', 'dharm' );

/** Database password */
define( 'DB_PASSWORD', 'Drc@1234' );

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
define( 'AUTH_KEY',         'M s7QHETXWW&MslApCP*:|%$l#+~&0r7y!~TYFnq~M>m6`P=+:s<t)@PRPuj*Th:' );
define( 'SECURE_AUTH_KEY',  '+Fj=|bAGkW2|,2gB9c[^g~xA_$TDQRIZzy!$$H`tY4wfB;?S%%8vYD ;$l VZ#hE' );
define( 'LOGGED_IN_KEY',    '2tEwvxdi)Qd~)TS8D<%kW`[>+z3%gTc#5SE5pPmH5t~]^#H!pfz+O1BnpQzM_bd!' );
define( 'NONCE_KEY',        'sUm&sOn/fHrad|Fc43TXOq6XQO5kh33U01_ZY71j}-Da]i_FfBlvV5F# Q}fnoX2' );
define( 'AUTH_SALT',        '!{E72`xIIl`LjxB1wK.K@X2]lH>d#-_Mqp/PncR6>Ngb$Q&L&_L{{!Z?d6;_hI-O' );
define( 'SECURE_AUTH_SALT', 'dsgqRefTz[zNNAe!V(QF*)wkd2qE%^bKu0&*E<`[zRo%xX;}c[`#[/KoI^ZN6B~m' );
define( 'LOGGED_IN_SALT',   '31yHUAfzj8hh$FAInnwqrNpla 7a_Ggl@,hgow9~FdGK(R<<P+bt5@kr`Kwg%y&Q' );
define( 'NONCE_SALT',       'ATk~:oX.a#yS$.{z?#s|$Ipbhp;DUN[JDv0C60,|sc%j[Z48lb5w_;J|supGkq(h' );

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
