<?php

/**
 * HTTP helper
 *
 * Hackwork's HTTP error thrower.
 */

/*
 * Headers
 */

// Set base mimetype. `text/html` is default.
ini_set('default_mimetype', 'text/html');

// Set base charset. `utf-8` is recommended.
ini_set('default_charset', 'utf-8');

/*
 * Compression
 */
  
// Enable Zlib compression
ini_set('zlib.output_compression', 1);

// Set the compression level
//
// Quick-ref:
// -1  => server's choice
// 0   => no compression
// 1-6 => predefined compression
ini_set('zlib.output_compression_level', -1);