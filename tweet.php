<?php
$title='Tweet | nginZ'; $cur='tw';
include 'include/head.php';
include 'include/tw-config.php';
?>
<h1>Tweet</h1>

<p class="desc">My latest tweet</p>
<?php
echo "<p>";
echo $tweet->status[0]->text;
echo "</p><p><a href='https://twitter.com/$nick'>@$nick</a></p>";
?>
<p><img class="tw" src="https://twitter.com/images/resources/twitter-bird-white-on-blue.png" width="200" height="200" alt="Twitter" /></p>
<?php
include 'include/footer.php';
?>
