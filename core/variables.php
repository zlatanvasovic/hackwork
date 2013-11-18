<?php

/*
 * Core variables
 */

//
// Doctype
//

$doctype = '<!DOCTYPE html>';

//
// Meta
//

$encoding = 'utf-8';
$title = 'Site';
$title_divider = '&middot;';
if (isset($slug)) {
  $title = "$slug $title_divider $title";
}
$author = 'Mr. Ghost';
$description = "Personal site of $author.";
$keywords = 'site, website, ghost';
$robots = 'noodp,noydir';
$viewport = 'width=device-width, initial-scale=1';
$stylesheet = "$root/assets/css/main.css";
$favicon = "$root/favicon.ico";
$apple_touch_icon = "$root/apple-touch-icon.png";

//
// Copyright
//

$cpowner = $author;
$cpyear = 2013;
$copyright = '&copy; ' . $cpyear . (($cpyear != date('Y')) ? '-' . date('Y')
                                    : '') . ' ' . $cpowner;