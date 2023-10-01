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
define( 'DB_NAME', 'dermaclinicstore_affsquare' );

/** Database username */
define( 'DB_USER', 'dermaclinicstore_affsquare' );

/** Database password */
define( 'DB_PASSWORD', 'qw;_SomiC2&~' );

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
define( 'AUTH_KEY',         '_V@.4DaG(O2%0j7w(.T 06,SD:e?^>CxYlm9xl)f(r.(Q/B(s;rbh<(F*NIki`n$' );
define( 'SECURE_AUTH_KEY',  'k K;D*um*h92kf[jMVH?&wAR}h9-=S%R[+[;fL%Ox)Hq1OB#;:eMou;%6yxrVArz' );
define( 'LOGGED_IN_KEY',    '&*_8GN2dNu9$%N[d#?rW5qpll;$11u-KqCm({D;);5QPvV:Q4V:lL9y>.Ym-L$WW' );
define( 'NONCE_KEY',        'n(),QSgpc/$%=Ri2/~}w%+3N<)g? vzj[AfglkjL#}L7l$sNfPdudLlgTa&9zs!k' );
define( 'AUTH_SALT',        '>JGo;eT}*]*<v))/jy~X;/fr+:2W;T*uVd5.tAJ_q[Rj:p-^7 YB?2tCW]+HrY2D' );
define( 'SECURE_AUTH_SALT', 'C4meqYgH(D0<2n|bUVT,A`:=VQq#g7&oOx]fIA~xzwea22[aVApJBi41O^XuFqqy' );
define( 'LOGGED_IN_SALT',   'kYjkD;Kyuln0C4`8q5)!mMAtr!xyduQy>7v6 P~[Wvvhf$U#wKr&AU}sy]6yW)aU' );
define( 'NONCE_SALT',       '<T]N1On@1$4[9(h@tLP]K=eF+3~{pj[UEX6GUuM<nk-G{SiO]P}`Rdw=eOgD7GB%' );

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
