<?php

/*
 * Layout variables
 */

//
// Meta
//

$doctype = '<!DOCTYPE html>';
$encoding = 'utf-8';
$site_title = 'Site';
$title_divider = '&middot;';
if (empty($page_title)) {
  $title = $site_title;
}
else {
  $title = "$page_title $title_divider $site_title";
}
$author = 'Mr. Ghost';
$description = "Personal site of $author.";
$keywords = 'site, website, ghost';
$robots = 'noodp,noydir';
$viewport = 'width=device-width, initial-scale=1';
$stylesheet = ASSETS . '/css/main.css';
$favicon = ASSETS . '/img/favicon.ico';
$favicon_mime = mime_content_type(PATH . $favicon);
$apple_touch_icon = ASSETS . '/img/apple-touch-icon.png';

//
// Copyright
//

$cpsign = '&copy;';
$cpyear = 2013;
$cpowner = $author;
$copyright = $cpsign . ' ' . $cpyear . (($cpyear != date('Y')) ? '-' .
                                        date('Y') : '') . ' ' . $cpowner;