<!DOCTYPE html>
<html>
<?php
$root = $_SERVER['DOCUMENT_ROOT'];
foreach (glob("$root/core/*.php") as $item) {
  require_once($item);
}
include_once "$root/includes/meta.php";
?>
  <body>
    <?php
    // Add newline to make nicer output
    echo $content . "\n";
    include_once "$root/includes/footer.php";
    ?>
  </body>
</html>