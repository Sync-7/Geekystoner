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
define( 'DB_NAME', 'geekystoner' );

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
define( 'AUTH_KEY',         '/.&r>f*52d8!*-cGAE6b+$kh&70FZf5/LkE|os4dt+pnAop_Q2l43E5`ZxI:^u.c' );
define( 'SECURE_AUTH_KEY',  'mdwQL]m.O*pdgqPyg&rc#f`kccs,h{?Q-p/z;i1Gnl6e?~lz>j!lHwSLj,[~d!!Z' );
define( 'LOGGED_IN_KEY',    'nW().TM 8/E9ys7V*~n5SoOr]7#dz9FUAccqJ@6|7t+#ns7ra4Rsq09S:uH&H`Z>' );
define( 'NONCE_KEY',        ')tBD_nEs+Vd%y%A<{I}HKCK`4_N;1fNh}u+0;aKboT6)Qu/>0fyE}{}d_Ux$~o^p' );
define( 'AUTH_SALT',        ']URtB28vbDL_#}HbF{.MKul1ZO9wR.fT<]u@XpG(Zk68o<s<s|-aJ8:8Is^_U=*c' );
define( 'SECURE_AUTH_SALT', '*,cMIA$-7::pL5/c_9 )~Lx|>V<SFM@01VU!QX8v}^yMvwe~;xPBjVfJ4=;n(`=`' );
define( 'LOGGED_IN_SALT',   'GjKWNL#`.g#OIt/1rCs+rgp<;jLB~6J9y8-I`09Yd5cFR`Te8|^}VgU*;E/tSaL:' );
define( 'NONCE_SALT',       'gzBe$cZW))gkX&.f+*RQ-D|pLrd*]cSqL?W$<|%9JW8wSNOwFGr{R0PR_nH~>$9S' );

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
