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
$charset = 'utf-8';
$meta = array(
  'author' => 'Mr. Ghost',
  'description' => 'Personal site of Mr. Ghost.',
  'keywords' => 'mister, ghost, site, website',
  'robots' => 'noodp,noydir',
  'viewport' => 'width=device-width, initial-scale=1'
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

/*
 * Assets
 */

// `<link rel="stylesheet">`
$stylesheet = array(
  CSS . '/index.css'
);

// `<link rel="*icon*">`
$icon = array(
  'favicon' => IMG . '/favicon.ico',
  'apple-touch-icon' => IMG . '/apple-touch-icon.png'
);

// `<script>`
$script = array(
  JS . '/index.js'
);

/*
 * Copyright
 */

$cpsign = '&copy;';
$cpyear = 2016;
$cpowner = $meta['author'];
$copyright = "$cpsign $cpyear " . (($cpyear = date('Y')) ? '' : '- ' .
                                  date('Y')) . $cpowner;
