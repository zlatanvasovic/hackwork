<?php
$nick='ZXeDroid';
$format='xml';
$tweet=simplexml_load_file("http://api.twitter.com/1/statuses/user_timeline/{$nick}.{$format}");
?>
