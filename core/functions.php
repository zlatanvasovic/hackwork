<?php

/*
 * Core functions.
 * 
 * Don't forget to add your ones.
 */

// `encrypt`
//
// Encrypts `$str` in rot13.
function encrypt($str) {
  echo str_rot13($str);
}

// `decrypt`
//
// Decrypts `$str` from rot13.
function decrypt($str) {
  echo str_rot13(str_rot13($str));
}

// `cfile`
//
// Checks for current file.
function cfile($file) {
  if (strpos($_SERVER['PHP_SELF'], $file)) {
    echo 'class="active"';
  }
}

// `fcount`
//
// Counts number of files in a directory.
function fcount($dir) {
  $i = 0;
  if ($handle = opendir($dir)) {
    while (($file = readdir($handle)) !== false) {
      if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) {
        $i++;
      }
    }
  }
}

// `feedparse`
//
// Parses RSS feed easily.
function feedparse($url) {
  $feed = @fopen("$url", 'r');
  if ($feed) {
    $data = '';
    while (!feof($feed)) {
      $data .= fread($feed, 8192);
    }
  }
  fclose($feed);
  echo $data;
}

?>