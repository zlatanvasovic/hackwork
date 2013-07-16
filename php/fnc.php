<?php

//
// NginZ functions
//

// Checks if the current is...
function curFile($file) {
	if (strpos($_SERVER["PHP_SELF"], $file)) echo 'class="current"';
}

?>
