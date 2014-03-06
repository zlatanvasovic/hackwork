<?php echo "$doctype\n"; ?>
<html>
  <head>
    <meta charset="<?php echo $charset; ?>">
    <title><?php echo $title; ?></title>
    <?php
    make_meta($meta);
    make_stylesheets($stylesheet);
    make_icons($icon);
    ?>
  </head>
  <body>
