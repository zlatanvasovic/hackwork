<?php

/*
 * Layout variables
 */

//
// Meta
//

$doctype = '<!DOCTYPE html>';
$encoding = 'utf-8';
$site = 'Site';
$title_divider = '&middot;';
// Include page title if set
if (!empty($title)) {
  $title = "$title $title_divider $site";
}
else {
  $title = $site;
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

$cpowner = $author;
$cpyear = 2013;
$copyright = '&copy; ' . $cpyear . (($cpyear != date('Y')) ? '-' . date('Y') :
                                    '') . ' ' . $cpowner;