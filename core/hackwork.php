<?php

/*
 * Hackwork
 *
 * Simple, layout-based PHP microframework for making HTML5 sites.
 */

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('PATH', ROOT);

// Generate layout
//
// `$layout` is a layout name, `$data` is a name of file which will be included
// from `data/`.
function layout($layout, $data) {
  foreach (glob(PATH . "/layouts/$layout/*.php") as $item) {
    if (preg_match('/set.*.php$/', $item)) {
      require_once($item);
    }
  }
  include_once PATH . "/layouts/$layout/header.php";
  include_once PATH . "/data/$data.php";
  include_once PATH . "/layouts/$layout/footer.php";
}