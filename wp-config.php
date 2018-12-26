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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'milestone');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rFrE#FQw$pJVcJ|[.z<{$j2q,zE f8j YKZ@3jwQzNi|?/{W/GFL`A9=W?[.PPb|');
define('SECURE_AUTH_KEY',  'b!.Q953=zSxp3s5dkE8^p@421yk+6SNGp?x+.rkr Jry{Gu>J!/`>$6owLt0{iZ@');
define('LOGGED_IN_KEY',    'S430FTA0v8WTq2X<@cY[Khz{7la88#:$B9|>V)A4<$`f(N7B0;!i|kYjZ)%1C4mp');
define('NONCE_KEY',        'S~jK),5Z^5RxiQ14vBTBU{D>jh.YW7fW!.UZC/QYWFXs>tp2T;ob96&=]`4_1[1_');
define('AUTH_SALT',        'yNafX;c$TH_3W-,!x`@88<M3Byf5x[?;.Q16g{j<59:LCVOp5}^UA5UHP$)LniGt');
define('SECURE_AUTH_SALT', '7I,p5=-7>s6kt%[}=[57`3Ct>n6ls9?RE<uDK%yQgl,F!UG%_lz^w>/8,:jRJ3`q');
define('LOGGED_IN_SALT',   'KRP>v+q.pjt:6usX QLJ_/tO_&8{7@Hpex*Nq+v2)D3 6&]q,*NLS<_yBr.rclPF');
define('NONCE_SALT',       'rizs1QV1~]x: IVsJ%N>d=#0-u^UJ7VF#T0yteK!0PC2+s*JaF)x))H*]G!]*JlZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
