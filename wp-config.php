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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'fq/GrFV7djcQxQMmFeGZ,VFY9!8z2mSnVvs`7M|Pti14Aq0yvp1NSk6=6;{0TJ>r' );
define( 'SECURE_AUTH_KEY',  '5FDW>H0{C(*ln/llRG9A}d/+i;:<QI:J^r8){hq57[].KKmkVnu|HRF-2^22#q@(' );
define( 'LOGGED_IN_KEY',    'qGkg8Ndmbj,Ri{g(>(5Ty^QwCP@&Qq8Gdx|VLC+%SLdtf{V+O3YD[Tjs6e>]>X/s' );
define( 'NONCE_KEY',        'e<joFP1R6RaW|/1C>V+ divMdz}iAF]J{wP#nq>l;CSg82m9Ef;E<rtl SvVldls' );
define( 'AUTH_SALT',        'ZOAg*2;5x9Ay$$>D%9<8_Rmr/03ZOJ:7^R+qQ5,|>Zzln4^%/%_?:!&wajVb9N^[' );
define( 'SECURE_AUTH_SALT', ';3DObTumZu$~f<s knKKNI~uPS5VFss{k@<]F|#f},]nW10<#]:m9 6O7H^aPNgq' );
define( 'LOGGED_IN_SALT',   'OFeO9%fi!7?O1||0@~OlJmy~szRvUjiv>5+}7IgXT:M;jMr*/%kp>5W%;xSz%,Z}' );
define( 'NONCE_SALT',       'yT)G ZZ&B11=Qs(}~,h>x )}28zy~8FiPtMz0N[sagb;HqH%ebT!GqboBjonsZ_H' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


@ini_set( 'upload_max_filesize' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'memory_limit', '512M' );
@ini_set( 'max_execution_time', '600' );
@ini_set( 'max_input_time', '600' );
