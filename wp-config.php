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
define( 'DB_NAME', 'lagos_invest' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '*)&87hjsgki' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
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
define('AUTH_KEY',         'U/Q,F@uF+/8w7f!Y?%k`;g|KooIZG0Tw%np%hV|8+XFCxQ*K-m8:|Ie8j,h{?-3w');
define('SECURE_AUTH_KEY',  'YfSVD+e.!jkp<r*k75&pyd+/=tL26p|rE;H0]*J<[L-R7~z[{&k,mGQnRL0;wRJr');
define('LOGGED_IN_KEY',    'wR621?;+W(8@H/;KIDAOk/`3962.SZk}bc`U-d9-$@<^s$Y}1KN/[Rg5+c lT[M:');
define('NONCE_KEY',        '0y})+vaL+<ol=[|0X|+WvNu9X4yHI&l|QE35(f<v+>Rz)!7PceF(YR+RIbr@sihH');
define('AUTH_SALT',        ',Lk/x]nQ;,d;YvtrI>.6-7+|pVdf;-C,ABR~bj-ki}2R>^nkLOS-]:O*F%l:?X4-');
define('SECURE_AUTH_SALT', '%wR%#1mW3gwc+4S!)I@q^IF0pR0YN*Gt<4}uuUoVVgp]-P1FeYzo06LwP}y<]TiN');
define('LOGGED_IN_SALT',   'Bn!>g4G|^ 1-3$fT~^#q/s}<8I-+.@k4N%vK1O|7nh!/DDc-p5p=I{.Hii.{?Bkj');
define('NONCE_SALT',       'V_I#W0{ku4%KX3kqr,-TEC>)6i6f.;N7nr.u4jlhm4-?D)d>W0huR;<-m(2kq+/3');
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