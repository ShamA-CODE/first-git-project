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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-slider' );

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
define( 'AUTH_KEY',         '=u%DK:{h2Jls9od),W6uiew39u>^J,2+.]l^E]/6[KXv9^qhEL 4=<:*@Ud9<gty' );
define( 'SECURE_AUTH_KEY',  'bN3nM_1V$&X.fJWM$iCtgc4H{R)D?KE}jTJ|8*1W2 ?L_|in$~p<KFNl?MlX*4dd' );
define( 'LOGGED_IN_KEY',    '.%)iq-L+7I),2+ Lo4=C.7Au;`*}(wK.]{<B:~Qc7I:5* OGL%tI^x-CY8ot=z7V' );
define( 'NONCE_KEY',        '<5WfmSQw_%9Ny)^apa8CNXb):s]-gLkwa*q?(e@%F1=c)2*S8AQ!01Wjna)e.8),' );
define( 'AUTH_SALT',        ' f2j@`8XvY4w<[2js;(hqg/<l[2q?<aU3ry+HZLE4[`U%u;kt*C)`FKo~m(f~Hrf' );
define( 'SECURE_AUTH_SALT', 'fcE)TPzK;US?/8@d<oRZ1H{.oxOCd%4/T20qsX(f4x?Pb:T<$e,v`CinD>q._j}E' );
define( 'LOGGED_IN_SALT',   ' =Y%?^@:OI/86Q=C7DIY-;9UJ H 6Z8*vrJK6$c_z}H;nwE<h@&&*{` ^M%K}Q:M' );
define( 'NONCE_SALT',       '+3Xc~eqh9n9nmunsr7L&u|(jU#C*Bi1*IYPn+&^P/Xf/.N&@N/*?^Cu<LL5:^7D8' );

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
