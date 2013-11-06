<!DOCTYPE html>
<html>
<?php
foreach (glob("$root/core/*.php") as $item) {
  require_once($item);
}
include_once "$root/includes/meta.php";
?>
  <body>
    <?php
    echo $content . "\n"; // Add newline to make output more readable
    include_once "$root/includes/footer.php";
    ?>
  </body>
</html>