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
define( 'DB_NAME', 'blog_db' );

/** MySQL database username */
define( 'DB_USER', 'jay' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'TcP#gdHu6p!uZu+dc,7rMuP-B|GmTI&1|U=n)b; Qy_H1:F,8;1l;dS^=.h5]Q8Y' );
define( 'SECURE_AUTH_KEY',  '9C=@nI}A<rw,.a&XO{qC[mD;R;<YM#W2L{>7LV!Gn#zP];_V1;nftgH(g4!E-dpe' );
define( 'LOGGED_IN_KEY',    'T2_|^;R%L8rEB~1/Q7_MNUoJS 4o4xVD39w;4lF,NY-c9-It7%3CQ`Vm>Y$E_2aw' );
define( 'NONCE_KEY',        'zo}~|9D!1vA.E]e$*gjO<1b0Plt?NhY+L3%az~3G;G8!g6TRn,X_&3;}>>s#KZM$' );
define( 'AUTH_SALT',        '>zO?bi#>k:DXXECq:l}0uL{FT^_%@hk<q$<P`x[r[SXo!u9P_Ka*]ZqktcsrBglg' );
define( 'SECURE_AUTH_SALT', 't(~W:|16[*$s4@qV;Hb-9o_}sW;:_e~*f>DG0~0qK38JTqzBDHOYO/ egysbZO97' );
define( 'LOGGED_IN_SALT',   '/gDT{##3Fkotx~O(bK,5_,.Cmu?_2!x];#OJ?D.o#JLnSGA/,[Crt&,I}(y2)Eq1' );
define( 'NONCE_SALT',       'B~VfZ#*Uw&OAT}&}GsfZf k;$ 9pEY<!j9++xo<a#5}I7QsyvIOSWt!rk3X6o~pG' );

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
