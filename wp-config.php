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
define('DB_NAME', 'b7040746_db3');

/** MySQL database username */
define('DB_USER', 'b7040746');

/** MySQL database password */
define('DB_PASSWORD', 'Qwer1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ne#,KgD~kL18<.u:.cds4#8u6%f-p`gt[:&84r_$^k%L]U.7Wt1e:]Uy)0,Tb~o{');
define('SECURE_AUTH_KEY',  'K:[^c%i(GSLo)5n3mDJ*eV1.:9{M(ZF3jL^-Q0o|heo9:r-N%S:+~{:(f-v79I4G');
define('LOGGED_IN_KEY',    'Fp|AjT%}|!sIGPn9>kb4f,F2Je(N-%npf@eEnK#LC1xNbybkm&_@| !$H(wRG}`V');
define('NONCE_KEY',        'J?D8]>h(mf9Wjyj<KyG7rfYubn#9vvim<3Zl/Fiq{_c(}{UI:zo|Wga1o#G4wNNv');
define('AUTH_SALT',        '`#BDnL`KD({h08.MZ<t&4rT#xQgGu5<j 0?|&qJXjBR=L&^jI!Scc`&l!UOc!r]m');
define('SECURE_AUTH_SALT', 'jv$v+D7m:xw,q[.Z>0W~95]F{CLcU?dj+W``t<C~&/tkaoM.f2erh152=?]Y:+sp');
define('LOGGED_IN_SALT',   'elJG*f_b$fXUG :$3t(;iN!uj&Db~Ao0#8g-&/vwU:nf3=N2zoBC+-ClVlHtzvbs');
define('NONCE_SALT',       ',on1<8te=7FnyfRQvlyWpWcNJ+sPwTu$9]yHE6f^ |K|*C%]<&zfr2GcC5GuD;HA');

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
