<?php

/**
 * Hackwork v2.0.0 (http://git.io/hackwork)
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

$_helpers = array(
  'config',
  'http',
  'errors',
  'layout'
);

foreach ($_helpers as $helper) {
  $helper = HELPERS . "/$helper.php";

  if (file_exists($helper)) {
    require_once $helper;
  }
}
