<?php
foreach (glob("core/*.php") as $core_item) {
  require_once($core_item);
}
?>
<!DOCTYPE html>
<html>
<?php include_once 'include/meta.php'; ?>
  <body>
    <?php
    echo $content;
    include_once 'include/footer.php';
    ?>
  </body>
</html>