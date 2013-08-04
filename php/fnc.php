<?php

//
// nginZ's functions
//

// Check if the current is...
//
// Requires styling of `.active` CSS class
function curFile($file) {
  if (strpos($_SERVER['PHP_SELF'], $file)) echo 'class="active"';
}

// Ctypto
//
// Encrypt `$str` in rot13
function crypto($str) {
  echo str_rot13($str);
}

// Display feed
//
// Parses RSS feeds
function displayFeed($url) {
  $fopen = @fopen("$url", 'r');
  if ($fopen) {
    $data = '';
    while (!feof($fopen)) {
      $data .= fread($fopen, 8192);
    }
  }
  fclose($fopen);
  echo $data;
}

?>
