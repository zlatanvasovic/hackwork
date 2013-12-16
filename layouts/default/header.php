<?php echo $doctype . "\n"; ?>
<html>
  <head>
    <meta charset="<?php echo $encoding; ?>">
    <title><?php echo $title; ?></title>
    <meta name="author" content="<?php echo $author; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <?php if ($robots) echo "<meta name=\"robots\" content=\"$robots\">\n"; ?>
    <meta name="viewport" content="<?php echo $viewport; ?>">
    <link rel="stylesheet" href="<?php echo $stylesheet; ?>">
<?php
if ($icons) {
  if ($favicon) {
    echo "    <link rel=\"icon\" type=\"$favicon_mime\" href=\"$favicon\">\n";
  }
  if ($apple_touch_icon) {
    echo "    <link rel=\"apple-touch-icon\" href=\"$apple_touch_icon\">\n";
  }
}
?>
  </head>
  <body>
