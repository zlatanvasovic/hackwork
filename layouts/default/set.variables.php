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
// If page title is set
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
$favicon = '/favicon.ico';
$apple_touch_icon = '/apple-touch-icon.png';

//
// Copyright
//

$cpowner = $author;
$cpyear = 2013;
$copyright = '&copy; ' . $cpyear . (($cpyear != date('Y')) ? '-' . date('Y')
                                    : '') . ' ' . $cpowner;