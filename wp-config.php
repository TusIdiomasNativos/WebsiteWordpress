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
define( 'DB_NAME', 'tusidiomasnativos' );

/** Database username */
define( 'DB_USER', 'adminJaime' );

/** Database password */
define( 'DB_PASSWORD', 'ivan123456@skl' );

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
define( 'AUTH_KEY',         'cB|cO3wQ*3|PQg~`S$8k&o (=GC{F=NJE9!+#t1V,Jb5NmXM,#(p]gDmC?+Vr*ix' );
define( 'SECURE_AUTH_KEY',  '&k:7/Kp,Fh=H1nQP[Y=1T3r9|fh:;_04v;}cDF=1?0S~chX1&jn/,%j`h%+[#9+{' );
define( 'LOGGED_IN_KEY',    'm0Z|]<F>[h;[?PwIL?TEi`n&9(-B&gKjph<%<V,g} :;<;y_W:2@1FB3G2;#CG|W' );
define( 'NONCE_KEY',        '#^Nsk?CozwI YW*{$UG J%s3/yi7=)sA#yj:V65{Ti@6jPU`=FI+S(pLUn+;3,:[' );
define( 'AUTH_SALT',        'o[KR(L2`ozzZ#_bGJW4k0<a!ZT+(|yvvbY_]h?v:K<j>@5hW&l>S[~PBB]33Ps0o' );
define( 'SECURE_AUTH_SALT', 'M`xlD54G{KYf#M8Lc6Q[SNe@E^5A_k;]*l,F[0;LdnEemZ$Mt{<*?@<}uc;2uv#9' );
define( 'LOGGED_IN_SALT',   'mmgl]v9UXx:X(nJk~#,X|]^,,7#zTD{vBFs<.F*INRuH Vbh.>I}2$TV+4EAqdq/' );
define( 'NONCE_SALT',       '|M:5Y.tPle:#[6aG1axTu}(#g)@U3i!j#m%Om6i/Ny)<01y?`qOI:!(V~k[0!6H.' );

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
define('WP_MEMORY_LIMIT', '512M');
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
/**include_once(ABSPATH . WPINC . '/header.php');**/
