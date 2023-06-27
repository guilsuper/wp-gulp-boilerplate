<?php
/**
 * This is a sample `config-*.php` file
 * Use it to generate your
 * * `config-local.php`
 * * `config-staging.php`
 * * `config-production.php`
 * Note: `config-local.php` isn't tracked with git
 */
define ('DB_NAME', 'your database name');
define ('DB_USER', 'your database user name');
define ('DB_PASSWORD', 'your database password');
define ('DB_HOST', 'localhost');

/**
 * Define your home URL
 */
define ('WP_HOME', 'http://example.com/');

/**
 * Hide errors
 * You probably want to comment this in your `config-local.php` file
 */
ini_set ('display_errors', 0);
define ('WP_DEBUG_DISPLAY', false);

/**
 * Debug mode
 * You probably want to uncomment this in your `config-local.php` file
 */
// define ('SAVEQUERIES', true);
// define ('WP_DEBUG', true);
