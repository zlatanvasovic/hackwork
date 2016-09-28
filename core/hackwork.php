<?php

/**
 * Hackwork v2.0.1 (http://git.io/hackwork)
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
  require_once $helper;
}
