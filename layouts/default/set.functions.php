<?php

/**
 * Layout functions
 */

/*
 * Generation
 */

// Generate `<meta>` tags (except encoding declaration)
function make_meta($array) {
  foreach ($array as $value) {
    echo "<meta name=\"$value[0]\" content=\"$value[1]\">\n";
  }
}

// Generate `<link>` tags
function make_stylesheets($array) {
  foreach ($array as $value) {
    echo "<link rel=\"stylesheet\" href=\"$value\">\n";
  }
}

function make_icons($array) {
  foreach ($array as $value) {
    switch ($value[0]) {
      case 'icon':
        echo "<link rel=\"$value[0]\" type=\"" .
          mime_content_type(PATH . $value[1]) . "\" href=\"$value[1]\">\n";
        break;
      default:
        echo "<link rel=\"$value[0]\" href=\"$value[1]\">\n";
    }
  }
}

// Generate `<script>` tags
function make_scripts($array) {
  foreach ($array as $value) {
    echo "<script src=\"$value\"></script>\n";
  }
}

/*
 * Basic
 */

// `is_currentfile`
//
// Checks is the given argument current file. Returns boolean.
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

// `cat`
//
// Imitates `cat` command from Unix shells.
// `$pre` => preformat feed contents boolean
function cat($url, $pre = true) {
  $data = file_get_contents($url);
  $data = str_replace(array('<', '>'), array('&lt;', '&gt;'), $data);
  echo ($pre ? '<pre>' : ''), $data, ($pre ? '</pre>' : '');
}

// `randomval`
//
// Selects a random value from array.
function randomval($array) {
  return $array[array_rand($array)];
}

// `undot`
//
// Removes dots from string.
function undot($string) {
  return str_replace('.', '', $string);
}