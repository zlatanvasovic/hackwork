<?php

/**
 * Hackwork (http://git.io/hackwork)
 *
 * Layout-based PHP micro-framework for full-stack HTML5 sites
 * Licensed under the MIT License.
 */

/*
 * Paths
 *
 * Remember, no trailing slashes!
 */

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('PATH', ROOT);
define('ASSETS', '/assets');
define('CSS', ASSETS . '/css');
define('FONTS', ASSETS . '/fonts');
define('IMG', ASSETS . '/img');
define('JS', ASSETS . '/js');
define('CORE', PATH . '/core');
define('DATA', PATH . '/data');
define('LAYOUTS', PATH . '/layouts');

/*
 * Helpers
 */

foreach (glob(CORE . '/*.php') as $helper) {
  if (!preg_match('/hackwork.php$/', $helper)) {
    require_once($helper);
  }
}

/*
 * Environment
 *
 * Values:
 *   `development` (`dev`)
 *   `production` (`prod`)
 */

define('ENV', 'development');

// Define consistent error reporting settings
switch (ENV) {
  case 'development' || 'dev':
    error_reporting(-1);
    ini_set('display_errors', 1);
    break;

  case 'production' || 'prod':
    ini_set('display_errors', 0);
    break;

  default:
    throwerr('Application environment is wrong.', $header[503], 503,
              EXIT_CONFIG);
}