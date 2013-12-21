<?php

/**
 * Layout functions
 */

// `is_currentfile`
//
// Checks for current file. Returns boolean.
function is_currentfile($file) {
  if (preg_match("/$file$/", $_SERVER['PHP_SELF'])) {
    return true;
  }
}

// `filecount`
//
// Counts files in a directory. `$dir` must not have a trailing slash.
// `$ignore` => results to ignore
function filecount($dir, $ignore = array('.', '..', '.git')) {
  $i = 0;
  foreach (scandir($dir) as $item) {
    if (! in_array($item, $ignore)) {
      if (is_dir("$dir/$item")) {
        $i += filecount("$dir/$item");
      }
      else {
        $i++;
      }
    }
  }
  return $i;
}

// `feedparse`
//
// Parses RSS or Atom feed.
// $pre => preformat feed contents, must be a boolean
function feedparse($url, $pre = false) {
  $feed = fopen($url, 'r');
  $data = stream_get_contents($feed);
  fclose($feed);
  if ($pre) {
    echo '<pre>';
  }
  echo $data;
  if ($pre) {
    echo '</pre>';
  }
}

// `selectrandom`
//
// Selects a random value from array.
function selectrandom($array) {
  return $array[array_rand($array)];
}

// `undot`
//
// Removes dots from string.
function undot($string) {
  return str_replace('.', '', $string);
}