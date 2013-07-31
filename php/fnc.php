<?php

//
// nginZ's functions
//

// Checks if the current is...
// Requires styling of `.current` CSS class
function curFile($file) {
	if (strpos($_SERVER["PHP_SELF"], $file)) echo 'class="current"';
}

?>
