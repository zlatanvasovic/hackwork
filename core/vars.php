<?php

/*
 * Crazy variables.
 *
 * Sets up your site.
 */

// 
// Root path
//

//
// Meta
//

$encoding = 'utf-8';
$site = 'Site';
$title = $site;
if (isset($slug)) {
  $title = "$slug &middot; $site";
}
$description = 'My crazy site';
$author = 'Me';
$keywords = 'site, website, web';
$styles = 'assets/css/main.css';
$favicon = 'favicon.ico';

//
// Copyright
//

$cpyear = 2013;
$cyear = date('Y');
$copy = '&copy; ' . $cpyear . (($cpyear != $cyear) ? '-' . $cyear : '') . ' ' . $author;

?>