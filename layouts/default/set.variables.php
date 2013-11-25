<?php

/*
 * Layout variables
 */

//
// Meta
//

$doctype = '<!DOCTYPE html>';
$encoding = 'utf-8';
$title = 'Site';
$title_divider = '&middot;';
if (!empty($slug)) {
  $title = "$slug $title_divider $title";
}
$author = 'Mr. Ghost';
$description = "Personal site of $author.";
$keywords = 'site, website, ghost';
$robots = 'noodp,noydir';
$viewport = 'width=device-width, initial-scale=1';
$stylesheet = ASSETS . '/css/main.css';
$favicon = PATH . '/favicon.ico';
$apple_touch_icon = PATH . '/apple-touch-icon.png';

//
// Copyright
//

$cpowner = $author;
$cpyear = 2013;
$copyright = '&copy; ' . $cpyear . (($cpyear != date('Y')) ? '-' . date('Y')
                                    : '') . ' ' . $cpowner;