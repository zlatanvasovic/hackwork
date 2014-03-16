<?php

/**
 * Server configuration
 *
 * Minimal server configuration for Hackwork.
 */

/*
 * Environment
 *
 * Values:
 *
 * - `development`
 * - `production`
 */

define('ENV', 'development');

// Define consistent error reporting settings
switch (ENV) {
  case 'development':
    error_reporting(-1);
    ini_set('display_errors', 1);
    break;

  case 'production':
    ini_set('display_errors', 0);
    break;

  default:
    throwerr(503, EXIT_CONFIG, 'Application environment is set incorrectly.');
}

/*
 * Settings
 */

// Compression
ini_set('zlib.output_compression', 1);
ini_set('zlib.output_compression_level', -1);

// Default timezone
date_default_timezone_set('UTC');
