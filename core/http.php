<?php

/**
 * HTTP helper
 *
 * Hackwork's HTTP error thrower.
 */

/*
 * Settings
 */

// Base charset
ini_set('default_charset', 'utf-8');
  
// Compression
ini_set('zlib.output_compression', 1);
ini_set('zlib.output_compression_level', -1);