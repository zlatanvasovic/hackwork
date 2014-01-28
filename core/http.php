<?php

/**
 * HTTP helper
 *
 * HTTP request manager.
 */

/*
 * HTTP properties
 */

// HTTP version
$_httpv = 'HTTP/1.1';

/*
 * HTTP headers
 *
 * HTTP status codes are taken from W3C's list, not IANA's list.
 * Reference: http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
 */

$_header = array(
  100 => "$_httpv 100 Continue",
  101 => "$_httpv 101 Switching Protocols",
  200 => "$_httpv 200 OK",
  201 => "$_httpv 201 Created",
  202 => "$_httpv 202 Accepted",
  203 => "$_httpv 203 Non-Authoritative Information",
  204 => "$_httpv 204 No Content",
  205 => "$_httpv 205 Reset Content",
  206 => "$_httpv 206 Partial Content",
  300 => "$_httpv 300 Multiple Choices",
  301 => "$_httpv 301 Moved Permanently",
  302 => "$_httpv 302 Found",
  303 => "$_httpv 303 See Other",
  304 => "$_httpv 304 Not Modified",
  305 => "$_httpv 305 Use Proxy",
  307 => "$_httpv 307 Temporary Redirect",
  400 => "$_httpv 400 Bad Request",
  401 => "$_httpv 401 Unauthorized",
  402 => "$_httpv 402 Payment Required",
  403 => "$_httpv 403 Forbidden",
  404 => "$_httpv 404 Not Found",
  405 => "$_httpv 405 Method Not Allowed",
  406 => "$_httpv 406 Not Acceptable",
  407 => "$_httpv 407 Proxy Authentication Required",
  408 => "$_httpv 408 Request Timeout",
  409 => "$_httpv 409 Conflict",
  410 => "$_httpv 410 Gone",
  411 => "$_httpv 411 Length Required",
  412 => "$_httpv 412 Precondition Failed",
  413 => "$_httpv 413 Request Entity Too Large",
  414 => "$_httpv 414 Request-URI Too Long",
  415 => "$_httpv 415 Unsupported Media Type",
  416 => "$_httpv 416 Requested Range Not Satisfiable",
  417 => "$_httpv 417 Expectation Failed",
  500 => "$_httpv 500 Internal Server Error",
  501 => "$_httpv 501 Not Implemented",
  502 => "$_httpv 502 Bad Gateway",
  503 => "$_httpv 503 Service Unavailable",
  504 => "$_httpv 504 Gateway Timeout",
  505 => "$_httpv 505 HTTP Version Not Supported",
);

/*
 * Server settings
 */

// Base charset
ini_set('default_charset', 'utf-8');

// Compression
ini_set('zlib.output_compression', 1);
ini_set('zlib.output_compression_level', -1);

// Default timezone
date_default_timezone_set('UTC');