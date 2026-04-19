<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'JdN:icfna.)o<?}qV&(@ZP1P- s*rga6&>7;HV%1(V4.sY0zvRPkm=k^a#eQA&7r' );
define( 'SECURE_AUTH_KEY',  ',<YuV|@9iEP5qN2PG v%hkE*#3+E-qCHAj9q[nptN{~WQJa/9)$+pNmT!aCR1jcc' );
define( 'LOGGED_IN_KEY',    'd}}PTIbYEVE/(bnn=+KiCLsT7$2Zci_7I1S6tAvZg,dcGilUrZ^:>4X6ts-8D4Z(' );
define( 'NONCE_KEY',        '017c.@l`R,j8W_C{uy2[I@V[=rl.XA#/(^8v%-ZFs2tE%YV`[nCwX$5(;~d$v9V ' );
define( 'AUTH_SALT',        'Vj+*iJ,E}$HKv]K*WN4>`+&Nt7wUhQX&c9#CXUqbZQrSB/Usq,Dwx|Q)dVuSl#gO' );
define( 'SECURE_AUTH_SALT', 'r8i?_T:vZVmxwJItlJ9?D6qK~q6tuGR=Zji]Ik)Gt#|=zYDK-*SEOfKkt(-;SP7&' );
define( 'LOGGED_IN_SALT',   'RTUwYmrm+p0bh0ZpZ0lr^M*/6$lXN+EC0k,He$q/`AKn(L~X7VdL&frbkTa`I:{/' );
define( 'NONCE_SALT',       '8H?&sGTx]$j`yo$HWz0Lz<g2f;:amy<.8bhV3 jo Tqpi92L@S7FNIEE{+{H,[&<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_test_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
