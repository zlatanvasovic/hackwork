<?php

/**
 * Layout variables
 */

/*
 * Base
 */

// Doctype
$doctype = '<!DOCTYPE html>';

/*
 * Meta
 */

// `<meta>`
$meta = array(
  'encoding' => array('charset', 'utf-8'),
  'author' => array('author', 'Mr. Ghost'),
  'description' => array('description', 'Personal site of Mr. Ghost.'),
  'keywords' => array('keywords', 'mister, ghost, site, website'),
  'robots' => array('robots', 'noodp,noydir'),
  'viewport' => array('viewport', 'width=device-width, initial-scale=1')
);

// `<title>`
$site_title = 'Site';
$title_divider = '&middot;';
if ($page_title) {
  $title = "$page_title $title_divider $site_title";
}
else {
  $title = $site_title;
}

// `<link>`
$link = array(
  'stylesheet' => array('stylesheet', ASSETS . '/css/index.css'),
  'favicon' => array('icon', ASSETS . '/img/favicon.ico'),
  'apple_touch_icon' => array('apple-touch-icon', ASSETS .
                            '/img/apple-touch-icon.png')
);

/*
 * Copyright
 */

$cpsign = '&copy;';
$cpyear = 2013;
$cpowner = $meta['author'][1];
$copyright = $cpsign . ' ' . $cpyear . (($cpyear != date('Y')) ? '-' .
                                        date('Y') : '') . ' ' . $cpowner;