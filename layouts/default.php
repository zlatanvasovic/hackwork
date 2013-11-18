<?php
$root = $_SERVER['DOCUMENT_ROOT'];
foreach (glob("$root/core/*.php") as $item) {
  require_once($item);
}
echo $doctype . "\n";
?>
<html>
  <?php include_once "$root/includes/meta.php"; ?>
  <body>
    <?php
    echo $content . "\n";
    include_once "$root/includes/footer.php";
    ?>
  </body>
</html>