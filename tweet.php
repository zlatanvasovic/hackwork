<?php
include 'include/head.php';
?>
<h1>Tweet</h1>

<p><strong>My latest tweet</strong></p>
<?php
$korisnicko_ime='ZXeDroid';
$format='xml';
$tweet=simplexml_load_file("http://api.twitter.com/1/statuses/user_timeline/{$korisnicko_ime}.{$format}");
echo "<p>";
echo $tweet->status[0]->text;
echo "</p><p><a href='https://twitter.com/ZXeDroid'>https://twitter.com/ZXeDroid</a></p>";
?>
<p><img src="https://twitter.com/images/resources/twitter-bird-white-on-blue.png" width="200" height="200" alt="Twitter"></p>
<?php
include 'include/footer.php';
?>
