<?php

//
// nginZ's functions
//

// Check if the current is...
// You need to style `.active` CSS class
function curFile($file) {
  if (strpos($_SERVER["PHP_SELF"], $file)) echo 'class="active"';
}

?>
