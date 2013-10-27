<?php

/*
 * Core variables.
 *
 * Set up the site.
 */

//
// Meta
//

$encoding = 'utf-8';
$title = 'Site';
if (isset($slug)) {
  $title = "$slug &middot; $title";
}
$description = 'Personal site of Mr. Ghost.';
$author = 'Mr. Ghost';
$keywords = 'site, website, ghost';
$robots = 'noodp,noydir';
$viewport = 'width=device-width, initial-scale=1.0';
$styles = "$root/assets/css/main.css";
$favicon = "$root/favicon.ico";
$apple_touch_icon = "$root/apple-touch-icon.png";

//
// Copyright
//

$cpowner = $author;
$cpyear = 2013;
$copyright = '&copy; ' . $cpyear . (($cpyear != date('Y')) ? '-' . date('Y')
                                    : '') . ' ' . $cpowner;

?>