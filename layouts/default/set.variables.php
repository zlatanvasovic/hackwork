<?php

/*
 * Layout variables
 */

//
// Meta
//

// Doctype
$doctype = '<!DOCTYPE html>';

// Encoding
$encoding = 'utf-8';

// Title
$site_title = 'Site';
$title_divider = '&middot;';
if ($page_title) {
  $title = "$page_title $title_divider $site_title";
}
else {
  $title = $site_title;
}

// SEO
$author = 'Mr. Ghost';
$description = "Personal site of $author.";
$keywords = 'ghost, site, website';
$robots = 'noodp,noydir'; // optional

// Styles
$viewport = 'width=device-width, initial-scale=1';
$stylesheet = ASSETS . '/css/main.css';

// Icons (optional)
$icons = false;
if ($icons) {
  $favicon = ASSETS . '/img/favicon.ico';
  $favicon_mime = mime_content_type(PATH . $favicon);
  $apple_touch_icon = ASSETS . '/img/apple-touch-icon.png';
}

//
// Copyright
//

$cpsign = '&copy;';
$cpyear = 2013;
$cpowner = $author;
$copyright = $cpsign . ' ' . $cpyear . (($cpyear != date('Y')) ? '-' .
                                        date('Y') : '') . ' ' . $cpowner;