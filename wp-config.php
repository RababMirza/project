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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'c?V1+cSe4) *nMt`VN|nM?dd(Qj4b?KDOB l^+]7v#K301S[H&[vZ|?Dz6CxI^<U' );
define( 'SECURE_AUTH_KEY',  'T5o:>Npa*9QUOEOli4v[L0D84zCT;Oi~K E4`AW>>`ds=BzdH|imagDGr:@5LTRT' );
define( 'LOGGED_IN_KEY',    'H*k:Klh1EHBU k~yt58})!5LoCDJ*`T,$o%VRHp3y{bi1Ufo|CJUB7^zM.~6n(iR' );
define( 'NONCE_KEY',        '0/-I+N|r(za;t){s4)`4U?Z^LVr,1o7yabIj9?E;lawRTl@(xhgOna}{,!$Wcs|i' );
define( 'AUTH_SALT',        'Qs*I{%.cS5@oGZQ!_%hbvck$:#$5bD`J|4=6jrnR$KO8T0:FFb@26VUoN2#^/~4t' );
define( 'SECURE_AUTH_SALT', 'j,c)P]&32k[1Hyk{3P{()PrGU mA%p_A@(kzYjeTgTm|XKG#%tjR>Ns.2+<h(Ys9' );
define( 'LOGGED_IN_SALT',   'OQcH^HZ0OU~p(H#=,hcO6-Y0,WioL:s}S7YCF]O=4l+6Zb7Kk{{]o.T5Z+PFc_k`' );
define( 'NONCE_SALT',       '*4L0]$S{DQkafR.4+2JiM&WhuEvkymgA`D]vjXJ{;5^QT$m&[|3^:N.[$o1=GF)}' );

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
