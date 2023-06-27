<?php
function is_localhost () {
	$environments = array(
		'localhost',
		'127.0.0.1',
		'::1'
	);

	return in_array ($_SERVER['REMOTE_ADDR'], $environments) && file_exists (__DIR__ . '/config-local.php');
}

function is_staging () {
	$environments = array(
		// List of staging hosts, e.g.
		// staging.example.com
		// http://staging.example.com
	);

	return in_array ($_SERVER['HTTP_HOST'], $environments) && file_exists (__DIR__ . '/config-staging.php');
}

/**
 * Database tables prefix
 * You probably want it to be more complex, e.g. 'wpexample123_'
 */
$table_prefix  = 'wp_';

/**
 * Salts and keys for security
 * Generate them at https://api.wordpress.org/secret-key/1.1/salt
 */
define ('AUTH_KEY',         'put your unique phrase here');
define ('SECURE_AUTH_KEY',  'put your unique phrase here');
define ('LOGGED_IN_KEY',    'put your unique phrase here');
define ('NONCE_KEY',        'put your unique phrase here');
define ('AUTH_SALT',        'put your unique phrase here');
define ('SECURE_AUTH_SALT', 'put your unique phrase here');
define ('LOGGED_IN_SALT',   'put your unique phrase here');
define ('NONCE_SALT',       'put your unique phrase here');

/**
 * Language
 * Leave blank for American English
 */
define ('WPLANG', '');

/**
 * Load database info
 * You probably don't want to change this
 */
if (is_localhost()) {
	include (__DIR__ . '/config-local.php');
} elseif (is_staging()) {
	include (__DIR__ . '/config-staging.php');
} else {
	include (__DIR__ . '/config-production.php');
}

/**
 * Define wordpress content directory
 * You probably don't want to change this
 * `build` and `dist` folders are generated with Gulp
 */
if (is_localhost()) {
	define ('CONTENT_DIR', '/content/build');
} else {
	define ('CONTENT_DIR', '/content/dist');
}
define ('WP_CONTENT_DIR', __DIR__ . CONTENT_DIR);
define ('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

/**
 * Define wordpress core directory
 * You probably don't want to change this
 */
define ('MY_WP_CORE_DIR', '/wordpress');
define ('WP_SITEURL', WP_HOME . MY_WP_CORE_DIR);

/**
 * You probably don't want to change this
 */
define ('DB_CHARSET', 'utf8');
define ('DB_COLLATE', '');

/**
 * Absolute path to WordPress core directory
 */
if ( !defined ('ABSPATH') )
	define ('ABSPATH', __DIR__ . MY_WP_CORE_DIR . '/');
require_once (ABSPATH . 'wp-settings.php');
