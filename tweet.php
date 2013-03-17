<?php
include 'include/head.php';
include 'include/tw-config.php';
?>
<h1>Tweet</h1>

<p><strong>My latest tweet</strong></p>
<?php
echo "<p>";
echo $tweet->status[0]->text;
echo "</p><p><a href='https://twitter.com/ZXeDroid'>@ZXeDroid</a></p>";
?>
<p><img src="https://twitter.com/images/resources/twitter-bird-white-on-blue.png" width="200" height="200" alt="Twitter" /></p>
<?php
include 'include/footer.php';
?>
