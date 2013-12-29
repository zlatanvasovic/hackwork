<?php

/**
 * HTTP helper
 *
 * Hackwork's HTTP error thrower.
 */

/*
 * Header statuses
 */

$http_prefix = 'HTTP/1.1';
$http_status = array(
  100 => "$http_prefix 100 Continue",
  101 => "$http_prefix 101 Switching Protocols",
  200 => "$http_prefix 200 OK",
  201 => "$http_prefix 201 Created",
  202 => "$http_prefix 202 Accepted",
  203 => "$http_prefix 203 Non-Authoritative Information",
  204 => "$http_prefix 204 No Content",
  205 => "$http_prefix 205 Reset Content",
  206 => "$http_prefix 206 Partial Content",
  300 => "$http_prefix 300 Multiple Choices",
  301 => "$http_prefix 301 Moved Permanently",
  302 => "$http_prefix 302 Found",
  303 => "$http_prefix 303 See Other",
  304 => "$http_prefix 304 Not Modified",
  305 => "$http_prefix 305 Use Proxy",
  307 => "$http_prefix 307 Temporary Redirect",
  400 => "$http_prefix 400 Bad Request",
  401 => "$http_prefix 401 Unauthorized",
  402 => "$http_prefix 402 Payment Required",
  403 => "$http_prefix 403 Forbidden",
  404 => "$http_prefix 404 Not Found",
  405 => "$http_prefix 405 Method Not Allowed",
  406 => "$http_prefix 406 Not Acceptable",
  407 => "$http_prefix 407 Proxy Authentication Required",
  408 => "$http_prefix 408 Request Timeout",
  409 => "$http_prefix 409 Conflict",
  410 => "$http_prefix 410 Gone",
  411 => "$http_prefix 411 Length Required",
  412 => "$http_prefix 412 Precondition Failed",
  413 => "$http_prefix 413 Request Entity Too Large",
  414 => "$http_prefix 414 Request-URI Too Long",
  415 => "$http_prefix 415 Unsupported Media Type",
  416 => "$http_prefix 416 Requested Range Not Satisfiable",
  417 => "$http_prefix 417 Expectation Failed",
  500 => "$http_prefix 500 Internal Server Error",
  501 => "$http_prefix 501 Not Implemented",
  502 => "$http_prefix 502 Bad Gateway",
  503 => "$http_prefix 503 Service Unavailable",
  504 => "$http_prefix 504 Gateway Timeout",
  505 => "$http_prefix 505 HTTP Version Not Supported",
);

/*
 * Settings
 */

// Base charset
ini_set('default_charset', 'utf-8');

// Compression
ini_set('zlib.output_compression', 1);
ini_set('zlib.output_compression_level', -1);