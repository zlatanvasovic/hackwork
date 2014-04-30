<?php

/**
 * HTTP helper
 *
 * HTTP request manager.
 */

defined('PATH') or exit('No direct script access allowed');

/*
 * HTTP properties
 */

// HTTP version
$httpv = $_SERVER['SERVER_PROTOCOL'];

/*
 * HTTP headers
 */

// Header messages
//
// HTTP status codes are taken from W3C's list, not IANA's list.
// Reference: http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
$header = array(
  // Informational
  100 => "$httpv 100 Continue",
  101 => "$httpv 101 Switching Protocols",

  // Successful
  200 => "$httpv 200 OK",
  201 => "$httpv 201 Created",
  202 => "$httpv 202 Accepted",
  203 => "$httpv 203 Non-Authoritative Information",
  204 => "$httpv 204 No Content",
  205 => "$httpv 205 Reset Content",
  206 => "$httpv 206 Partial Content",

  // Redirection
  300 => "$httpv 300 Multiple Choices",
  301 => "$httpv 301 Moved Permanently",
  302 => "$httpv 302 Found",
  303 => "$httpv 303 See Other",
  304 => "$httpv 304 Not Modified",
  305 => "$httpv 305 Use Proxy",
  307 => "$httpv 307 Temporary Redirect",

  // Client error
  400 => "$httpv 400 Bad Request",
  401 => "$httpv 401 Unauthorized",
  402 => "$httpv 402 Payment Required",
  403 => "$httpv 403 Forbidden",
  404 => "$httpv 404 Not Found",
  405 => "$httpv 405 Method Not Allowed",
  406 => "$httpv 406 Not Acceptable",
  407 => "$httpv 407 Proxy Authentication Required",
  408 => "$httpv 408 Request Timeout",
  409 => "$httpv 409 Conflict",
  410 => "$httpv 410 Gone",
  411 => "$httpv 411 Length Required",
  412 => "$httpv 412 Precondition Failed",
  413 => "$httpv 413 Request Entity Too Large",
  414 => "$httpv 414 Request-URI Too Long",
  415 => "$httpv 415 Unsupported Media Type",
  416 => "$httpv 416 Requested Range Not Satisfiable",
  417 => "$httpv 417 Expectation Failed",

  // Server error
  500 => "$httpv 500 Internal Server Error",
  501 => "$httpv 501 Not Implemented",
  502 => "$httpv 502 Bad Gateway",
  503 => "$httpv 503 Service Unavailable",
  504 => "$httpv 504 Gateway Timeout",
  505 => "$httpv 505 HTTP Version Not Supported",
);
