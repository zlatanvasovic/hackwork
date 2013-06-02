<?php

//
// NginZ functions
//

// Checks if the current is...
function curFile($file) {
	if (strpos($_SERVER['PHP_SELF'], $file)) echo 'class="current"';
}

// Gets the latest tweet
function latestTweet($nick) {
	$tweet = simplexml_load_file("http://api.twitter.com/1/statuses/user_timeline/{$nick}.xml")
	echo $tweet->status[0]->text;
}

?>
