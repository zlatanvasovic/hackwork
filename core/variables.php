<?php

/*
 * Core variables.
 *
 * Set up your site.
 */

//
// Meta
//

$encoding = 'utf-8';
$site = 'Site';
$title = $site;
if (isset($slug)) {
  $title = "$slug &middot; $site";
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
$cyear = date('Y');
$copy = '&copy; ' . $cpyear . (($cpyear != $cyear) ? '-' . $cyear : '') . ' ' . $cpowner;

?>