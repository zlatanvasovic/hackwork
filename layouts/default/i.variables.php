<?php

/**
 * Layout variables
 */

/*
 * Base
 */

// Document type
$doctype = '<!DOCTYPE html>';

/*
 * Meta
 */

// `<meta>`
$charset = 'utf-8';
$meta = array(
  'author' => 'Ghost',
  'description' => 'The personal site of Ghost.',
  'keywords' => 'mister, ghost, site, website',
  'robots' => 'noodp,noydir',
  'viewport' => 'width=device-width, initial-scale=1'
);

// `<title>`
$site_title = 'Site';
$title_divider = '&middot;';
$title = ($page_title ? "$page_title $title_divider " : '') . $site_title;

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
$cpyear = 2017;
$cpowner = $meta['author'];
$copyright = "$cpsign $cpyear " . (($cpyear = date('Y')) ? '' : '- ' .
                                  date('Y')) . $cpowner;
