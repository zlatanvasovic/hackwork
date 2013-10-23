<?php

/*
 * Core functions.
 * 
 * Don't forget to add own ones.
 */

// `encrypt`
//
// Encrypts `$str` in rot13.
function encrypt($str) {
  echo str_rot13($str);
}

// `decrypt`
//
// Decrypts `$str` in rot13. Gives `$str` as output.
function decrypt($str) {
  echo str_rot13(str_rot13($str));
}

// `cfile`
//
// Checks for current file. Change the target class name if necessary.
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
// Parses RSS or Atom feeds.
function feedparse($url) {
  $feed = fopen("$url", 'r');
  $data = stream_get_contents($feed);
  fclose($feed);
  echo $data;
}

?>