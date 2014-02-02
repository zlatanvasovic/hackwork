<?php echo $doctype . "\n"; ?>
<html>
  <head>
    <meta charset="<?php echo $charset; ?>">
    <title><?php echo $title; ?></title>
    <?php
    _make_meta($meta);
    _make_stylesheets($stylesheet);
    _make_icons($icon);
    ?>
  </head>
  <body>
