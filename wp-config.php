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
define( 'DB_NAME', 'hpdb_dibof' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '5I6A2ocekpix' );

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
define( 'AUTH_KEY',         '~Z$?|SWY~dc;,F(tvbY[o_{leN8Tnfla_^vys=UAI<0WfT*A@4Fo.Y),Q-zf=Gt[' );
define( 'SECURE_AUTH_KEY',  'g^T`xn5*I1;^5LURQ(,=s_CYtC1:C f*mK.Bd:BAx(nu=Zg<!!qo 8=k((-*.%*4' );
define( 'LOGGED_IN_KEY',    '=-aBpf;XL<rKlX+{10RT+{*lKS9F.@9A?K8e9*VKuN]xZwQ^.PF8;f=xk,x1vyXH' );
define( 'NONCE_KEY',        'pUI^*!JE@F 6kR<C`<(0FHxG0O}FbIkF_BriEXBe3y,LLP>BKg/A[g@z-}H,7?V2' );
define( 'AUTH_SALT',        'V5I:|LqQfVgx<(-$arNcbo$%<6Sbig/q^U;g&#@a)g+yqkmeH7s6A.I{q_PsG,~a' );
define( 'SECURE_AUTH_SALT', 'MtCV`Li^ 0C`53-NLLV~FWT%+7%E%`|7~Y=dJt@td4-$l {yzWo_> JF!JbDNh[y' );
define( 'LOGGED_IN_SALT',   'JZPvAe(&2$)?Doaj1Sj4/fDlq!W1WY:`D&_H:N6hm^f}k)=)%[T5I(r>pJhxO ^m' );
define( 'NONCE_SALT',       'U?(+LB]feh+`K1,=wvzPn*~B(U,*|y8Yh_OJKc+b4JEII2]Ar(AH>-ByZ-K)+v?b' );

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

//avoid FTP when install plugin
define('FS_METHOD', 'direct');
