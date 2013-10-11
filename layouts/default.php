<?php
foreach (glob("$root/core/*.php") as $core_item) {
  require_once($core_item);
}
?>
<!DOCTYPE html>
<html>
<?php include_once "$root/includes/meta.php"; ?>
  <body>
    <?php
    echo $content . "\n";
    include_once "$root/includes/footer.php";
    ?>
  </body>
</html>