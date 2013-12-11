<?php

/*
 * Hackwork
 *
 * Simple, layout-based PHP microframework for making HTML5 sites.
 * http://git.io/hackwork
 */

// Define paths
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('PATH', ROOT);
define('ASSETS', '/assets');
define('DATA', PATH . '/data');
define('LAYOUTS', PATH . '/layouts');

// Generate layout
//
// `$layout`     => layout name
// `$data`       => data file name
// `$page_title` => [optional] page title
function layout($layout, $data, $page_title = false) {
  foreach (glob(PATH . "/layouts/$layout/*.php") as $item) {
    if (preg_match('/set.*.php$/', $item)) {
      require_once($item);
    }
  }
  require_once LAYOUTS . "/$layout/header.php";
  require_once DATA . "/$data.php";
  require_once LAYOUTS . "/$layout/footer.php";
}