<?php

//
// nginZ's functions
//

// Ctypto
//
// Encrypt `$str` in rot13
function crypto($str) {
  echo str_rot13($str);
}

// Get feed
//
// Parse RSS feeds
function get_feed($url) {
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

// Current file checker
//
// Check what file is current
function cur_file($file) {
  if (strpos($_SERVER['PHP_SELF'], $file)) echo 'class="active"';
}

?>