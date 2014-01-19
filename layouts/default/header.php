<?php echo $doctype . "\n"; ?>
<html>
  <head>
    <meta charset="<?php echo $charset; ?>">
    <title><?php echo $title; ?></title>
    <?php
    _make_meta($meta);
    _make_stylesheet($stylesheet);
    _make_icon($icon);
    ?>
  </head>
  <body>
