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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'vh(`]<JZH?^tcQhV^mf+4!zcP%:nc){mA?]QB{.)kj]qVUc4<%eJfL1pKy<&E^0J' );
define( 'SECURE_AUTH_KEY',  'nLx%nCVQ90[=lDzKIvSfBBNinTyY2CC;hH#A7Vp/;)B;UAYyfP*9b|#Iog+BdWaP' );
define( 'LOGGED_IN_KEY',    '[:De6fYYs}sat-H[<_&l&TX^M6)6DfbJipLVnxP9wr|&k|58Eqp=0vfl:t5_^Im1' );
define( 'NONCE_KEY',        'iMp_JXV<)j{o(9k6(`*|><4IOj!AYd`g<y/~gNGC3!9y^cMyqj43myG0|W6B<Up6' );
define( 'AUTH_SALT',        '4JQ}ysHIbJI}-aM}J/#BLn2pCdl?Nds5O]bM[b7S2b(_>x[_[a{h91(~`Sn01.+e' );
define( 'SECURE_AUTH_SALT', 'KfUAf|~2Rna89&&YOHIYE#H KQ&/__.ZlJQT**(h1w*-S;%97fux^$|?6#60.!r&' );
define( 'LOGGED_IN_SALT',   '^CS!wfC;M/ <qL@A{ cY~$GkxUa?tMKmuI1iXcf?*L~=K`I#-!+W@_YMUx0(?M])' );
define( 'NONCE_SALT',       'A5&Ym/b(q*O5fV,.gLUPlX0o[JfJZ~Skkv!_^C40ETv-yaZrHQ*$erv}zI}2.%ag' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
