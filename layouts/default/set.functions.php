<?php

/*
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
// Counts number of files in a directory. `$dir` must not have a trailing
// slash.
function filecount($dir) {
  $i = 0;
  foreach (glob($dir . '/*') as $file) {
    if (!is_dir($file)) {
      $i++;
    }
  }
  echo $i;
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
  echo $array[array_rand($array)];
}

// `undot`
//
// Removes dots from string.
function undot($string) {
  echo str_replace('.', '', $string);
}