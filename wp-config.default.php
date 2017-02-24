<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 *
 * Please note if you add constants in this file (i.e. define statements)
 * these cannot be overridden in environment config files.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0.1
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '^Tk!DP KuZ| 8sa5B6XH~A6jbZirR*O8o{y&nC>L^*AQ`f-1ww]0(>HK4$JB`Ni ' );
define( 'SECURE_AUTH_KEY',  'LD6J&S?owN+<ATi6Y,k-)b/KI6deH@X+pL1RCxZO-<+OwT~ %_QJw.9PH|t/j@9.' );
define( 'LOGGED_IN_KEY',    'p6sg3=i3p1EOq{:&j<:LO8IZ!|Es:pg+G^.Q*{#s}cGVmKf%Z?^eX<hFn:1ptS>?' );
define( 'NONCE_KEY',        ';+[cE|/Q^7I{vGuco ag?k{eqc|(sp-]%w,.4rGb,7!dsOk(efih7l<uv-?;w,o$' );
define( 'AUTH_SALT',        '/g`./)X0:40!/tPzbVSoMWlGL#=}Z.0TFFocfVa`f{n?RV4GpZ|Tzs~7)xj3j:U!' );
define( 'SECURE_AUTH_SALT', '*Q`v&&%POFJ%MR}C_fW;2tVU@+`Ql>,:[2b} s3V1N:lo}|+<?rVu+)X9tTwf?6V' );
define( 'LOGGED_IN_SALT',   '3,w^=XgT/g$[oc!@ |sa1$#3ud.F(M#O|@0E+5ODD:[v2uQ6gBn>Ud-4wM8m<K5H' );
define( 'NONCE_SALT',       '37SfB-b<f=vV&s^3S)|2BA}CurEy^,?UT3J[4A-_7XwPC>+X_u#;9nKnsTX|gz>Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', '' );

/**
 * Increase memory limit.
 */
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'FS_METHOD', 'direct' );
