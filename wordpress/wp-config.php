<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'archenedb');

/** MySQL database username */
define('DB_USER', 'arch_admin');

/** MySQL database password */
define('DB_PASSWORD', 'whfs991');

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
define('AUTH_KEY',         ',9$SzRew;<+d fmpSwFo_Da9 :TU@4FJ4s9d-bU`5aP_nn3-$dC|m1}w|9<H?BRv');
define('SECURE_AUTH_KEY',  'Pg1:Jd<T:T>BPc!=-`@HZ(?0toR_RQJ-6-a4^O4|6&G!uTSCytdQ_rQGyE x+,.H');
define('LOGGED_IN_KEY',    '_H{l)+_f,-H_.LZ%Fhk(YnO~Vch^a)-m<m1u&xVC=aSMjp}VkQmaZCf[PXT!n#xD');
define('NONCE_KEY',        '2ccO5:mHbX3m$-B{FGvQVW&4v?8+5[xxZ-}QFK$lUekqfU(O~~|wu*gk7w+5R5TK');
define('AUTH_SALT',        '#LdHBxR},k@a(~[BdCCK]5+|`) OZV>[o,qjy.4S!?+xP%W&?XQ1<!#Flrj| $=Z');
define('SECURE_AUTH_SALT', 'k&f|v(WP}j=j1*6e#(.$u#B0KQt/*4[&1YigrrqoT9Mf1g-Ry$9Dr!;0YiU+rQj_');
define('LOGGED_IN_SALT',   'AGksJ(xXqy+D43-]>ZctVfH8+|>*kYw`wz/@r[?XVq6D[~X+75I2?1(Y*Ri%I0CO');
define('NONCE_SALT',       'um:n4w</h-Yd[}=h-XVu7xEZ;x^bv4+#70<B5x`Z0|MiB2k2fga9~!xH+>vx9uh5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
