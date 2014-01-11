<?php

/**
 * Layout helper
 *
 * Crystallized layout generator.
 */

/*
 * Layout generator
 *
 * `$layout`     => layout name
 * `$data`       => data file name
 * `$page_title` => [optional] page title
 */

function _layout($layout, $data, $page_title = false) {
  foreach (glob(PATH . "/layouts/$layout/set.*.php") as $item) {
    require_once($item);
  }

  require_once LAYOUTS . "/$layout/header.php";
  require_once DATA . "/$data.php";
  require_once LAYOUTS . "/$layout/footer.php";
}