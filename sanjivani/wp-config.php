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
define( 'DB_NAME', 'sanjivani' );

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
define( 'AUTH_KEY',         '{[gWyw0If]xRX^{G(N/DdO`-L{YbhaTAY`qEj`,wb&aQNI}cf: [OCKB|hbUBe1[' );
define( 'SECURE_AUTH_KEY',  '/;-kicpw]6VJx_?80kpi41Uc[cH?$jXVN%:2D!m;cT`Xw,$UG&e#2/n+#>A9}@Lh' );
define( 'LOGGED_IN_KEY',    'T)=mi,;@#,A(6t7H)pN6-398HG}4<5r!RTi<6@>Y,2Zu%79`8WGE1n<jg91rL):5' );
define( 'NONCE_KEY',        '^L#t:PS0E@YI6oC}.pGy^M!3I@.5GclNjGc0m$TZ{!#!_;dT<62SQY.eViBxewX,' );
define( 'AUTH_SALT',        'V2P3|#$P6cUD OyE<O3/FT3BV5c08lcxej*u[7&f8gV 6]ZpA7]V4*G$ym&UUwef' );
define( 'SECURE_AUTH_SALT', '7Bl$[*CM9prRy$Y6T4V0MG pnl*O2I;&i>I]fjDoS])F170;)_b)4(?xU9k9tba@' );
define( 'LOGGED_IN_SALT',   'a>{]O++#]{v^(&5GaUtd$D-]*2Kbf{JN[mu`ib4N2Kd0}&$#UF%x`U`Dv<At5Pux' );
define( 'NONCE_SALT',       ';q&UIWjbb0B)Ico{,EdD1P)(L|s1Vn!yYCAljZprV/+x.0FY!>Y-kD#BF%Y:J_$E' );

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
