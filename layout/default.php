<?php
foreach (glob("$root/core/*.php") as $core_item) {
  require_once($core_item);
}
?>
<!DOCTYPE html>
<html>
<?php include_once "$root/include/meta.php"; ?>
  <body>
    <?php
    echo $content;
    include_once "$root/include/footer.php";
    ?>
  </body>
</html>