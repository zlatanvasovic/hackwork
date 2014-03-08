<?php

/**
 * Hackwork v1.2.0 (http://git.io/hackwork)
 * Licensed under the MIT License.
 */

/*
 * Paths
 *
 * Omit trailing slashes here.
 */

// Root
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('PATH', ROOT);

// Core
define('CORE', PATH . '/core');
define('HELPERS', CORE . '/helpers');

// Layouts
define('LAYOUTS', PATH . '/layouts');

// Data
define('DATA', PATH . '/data');

// Assets
define('ASSETS', '/assets');
define('CSS', ASSETS . '/css');
define('JS', ASSETS . '/js');
define('FONTS', ASSETS . '/fonts');
define('IMG', ASSETS . '/img');

/*
 * Helpers
 */

foreach (glob(HELPERS . '/*.php') as $helper) {
  require_once($helper);
}

/*
 * Environment
 *
 * Values:
 *
 * - `development` (`dev`)
 * - `production` (`prod`)
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

/*
 * Settings
 */

// Compression
ini_set('zlib.output_compression', 1);
ini_set('zlib.output_compression_level', -1);

// Default timezone
date_default_timezone_set('UTC');
