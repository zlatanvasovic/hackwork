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
$description = 'My personal site.';
$author = 'Me';
$keywords = 'site, website, web';
$robots = 'noodp,noydir';
$viewport = 'width=device-width, initial-scale=1.0';
$styles = "$root/assets/css/main.css";
$favicon = "$root/favicon.ico";

//
// Copyright
//

$cpowner = $author;
$cpyear = 2013;
$copy = '&copy; ' . $cpyear . (($cpyear != date('Y')) ? '-' . date('Y') : '') . ' ' . $cpowner;

?>