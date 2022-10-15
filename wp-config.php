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
define( 'DB_NAME', 'wordpress6.0.2' );

/** Database username */
define( 'DB_USER', 'daniel06' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'YDo2su#7SQ8/MEGZMAyfB)iZT`shH @S;)%H?n0.QqJ0[mRz.W,LeI4:Z!5QxEJ ' );
define( 'SECURE_AUTH_KEY',  '&LXzRYqCRZy6J8. h_$B0|X^-4V=8L@X~;]j6LU/+=vGV[lVcUUitHUk9AT]UfEd' );
define( 'LOGGED_IN_KEY',    'l;zic$YP$Tq&+7DhlQb{;`EuOx,L,*X$$k)T%#WUezUwO9mT:<N!h_ac~rKt_;)r' );
define( 'NONCE_KEY',        '%.P++(#UMuml2o@_c490lq>)Nc)r?Q?ChVzk[g1{bND7(0p7 DT[O34*V3aw$#vW' );
define( 'AUTH_SALT',        'g)|GqTt}mJh>[R%XH.v3$b*95ve{0(h?_/8>KMPh8[5kE,s|Q]&m_ge~Ws-Uv#CW' );
define( 'SECURE_AUTH_SALT', '<m G`;/Pu1 TJze.8!q2;Dn];98~ymtG/qZ$2qRG6wP+3!o9JM4QD=|~_rAta&r/' );
define( 'LOGGED_IN_SALT',   'wi5qjyGU;X)TejcY$o76>Er}w/_1Of q$~`7B]t%?An*iH9&6rj7l%A55`~k52 *' );
define( 'NONCE_SALT',       '2/k,u~o$7)0M%;0N7[4#Ccf{7K*MY3H&!X+@+{[p qCdlfJZe3jO%v&$V/P(jZF?' );

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
