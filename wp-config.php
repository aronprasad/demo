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
define( 'DB_NAME', 'tlrfmdu' );

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
define( 'AUTH_KEY',         'y/Mp!kW;R7~::}<E)lfTB<qv*1C-)T}zSil}+LcHn`-r?nfUo{16;B5STA{l$E+[' );
define( 'SECURE_AUTH_KEY',  '(eRl{[TrybbNH09Dg`N58(l)5A7$FcM32eGI&;f72kGB+ INFx)8Fv}.!C;O*V`D' );
define( 'LOGGED_IN_KEY',    '=H|@l<]S/9)OG&#jE ja#A4oSftXUD6fl@WTEU&!w.ucL79&*ihH;GPl}plcvMu_' );
define( 'NONCE_KEY',        '.a`<+,/9j zi8?._n[<Ya1GeX/8|,c yB?^>Sw=33,y8dTWINex{R(>$+62D[Hm9' );
define( 'AUTH_SALT',        'Q1yi:pj{5}Q[> Qky5C:([2.$2ljB<!&fWM3D)_(.=T=%,z!E-:0IN|V#.bHk3t9' );
define( 'SECURE_AUTH_SALT', 'c!z}K4FyA.kK6$bVeGUL(:.]F!0#U9G+syhqUmW_T9g=q%QC9C1nWL;YQRtrKG_p' );
define( 'LOGGED_IN_SALT',   'mvX&4i^GT_Yx#c:k_|ePWzQ*0h~snY|! ,}rKbn4Y8^H}$Lq.*4F)1:O3Z`mb7g)' );
define( 'NONCE_SALT',       'eH`mdTSlSC)Nr%AwPS)8#vIKiun:t}_]?du.66*^Z R=eAUn29^~6xm$c-@/,(Uh' );

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
define('FS_METHOD','direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
