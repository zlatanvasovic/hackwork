<?php

/**
 * Hackwork
 *
 * Simple, layout-based PHP micro framework for making HTML5 sites.
 * http://git.io/hackwork
 */

/*
 * Define paths
 *
 * Remember, no trailing slashes!
 */

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('PATH', ROOT);
define('ASSETS', '/assets');
define('DATA', PATH . '/data');
define('LAYOUTS', PATH . '/layouts');

/*
 * Define environment
 *
 * Valid values:
 *   development
 *   production
 */

define('ENVIRONMENT', 'production');

// Define consistent error reporting settings
switch (ENVIRONMENT) {
  case 'development':
    error_reporting(-1);
    ini_set('display_errors', 1);
  break;

  case 'production':
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    ini_set('display_errors', 0);
  break;

  default:
    header('HTTP/1.1 503 Service Unavailable', true, 503);
    echo 'Application environment is incorrect.';
    exit(1); // generic error
}

/*
 * Import helpers
 */

foreach (glob(PATH . '/core/*.php') as $helper) {
  if (!preg_match('/hackwork.php$/', $helper)) {
    require_once($helper);
  }
}