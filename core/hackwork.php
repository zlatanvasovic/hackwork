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
 * Import helpers
 */

foreach (glob(PATH . '/core/*.php') as $helper) {
  if (!preg_match('/hackwork.php$/', $helper)) {
    require_once($helper);
  }
}

/*
 * Define environment
 *
 * Valid values:
 *   development
 *   production
 */

define('ENVIRONMENT', 'development');

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
    header($http_status[503], true, 503);
    echo 'Application environment is incorrect.';
    exit(1); // 1 is generic error
}