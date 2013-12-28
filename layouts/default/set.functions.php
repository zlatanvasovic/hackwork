<?php

/**
 * Layout functions
 */

/*
 * Generation
 */

// Generate `<meta>` tags
function _make_meta($array) {
  foreach ($array as $value) {
    echo "<meta name=\"$value[0]\" content=\"$value[1]\">\n";
  }
}

// Generate `<link>` tags
function _make_link($array) {
  foreach ($array as $value) {
    if ($value[0] === 'icon') {
      echo "<link rel=\"$value[0]\" type=\"" .
        mime_content_type(PATH . $value[1]) . "\" href=\"$value[1]\">\n";
    }
    else {
      echo "<link rel=\"$value[0]\" href=\"$value[1]\">\n";
    }
  }
}

/*
 * Basic
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
    if (!in_array($item, $ignore)) {
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