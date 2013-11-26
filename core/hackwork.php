<?php

/*
 * Hackwork
 *
 * Simple, layout-based PHP microframework for making HTML5 sites.
 * http://git.io/hackwork
 */

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('PATH', ROOT);
define('ASSETS', '/assets');
define('DATA', PATH . '/data');
define('LAYOUTS', PATH . '/layouts');

// Generate layout
//
// `$layout` => layout name
// `$slug`   => page slug and a data file name
// `$title`  => page title
function layout($layout, $slug, $title) {
  foreach (glob(PATH . "/layouts/$layout/*.php") as $item) {
    if (preg_match('/set.*.php$/', $item)) {
      require_once($item);
    }
  }
  include_once LAYOUTS . "/$layout/header.php";
  include_once DATA . "/$slug.php";
  include_once LAYOUTS . "/$layout/footer.php";
}