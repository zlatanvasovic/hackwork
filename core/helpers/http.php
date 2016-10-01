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
$http_version = $_SERVER['SERVER_PROTOCOL'];

/*
 * HTTP headers
 */

// Header messages
//
// HTTP status codes are taken from W3C's list, not IANA's list.
// Reference: http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
$http_status = array(
  // Informational
  100 => "Continue",
  101 => "Switching Protocols",

  // Successful
  200 => "OK",
  201 => "Created",
  202 => "Accepted",
  203 => "Non-Authoritative Information",
  204 => "No Content",
  205 => "Reset Content",
  206 => "Partial Content",

  // Redirection
  300 => "Multiple Choices",
  301 => "Moved Permanently",
  302 => "Found",
  303 => "See Other",
  304 => "Not Modified",
  305 => "Use Proxy",
  307 => "Temporary Redirect",

  // Client error
  400 => "Bad Request",
  401 => "Unauthorized",
  402 => "Payment Required",
  403 => "Forbidden",
  404 => "Not Found",
  405 => "Method Not Allowed",
  406 => "Not Acceptable",
  407 => "Proxy Authentication Required",
  408 => "Request Timeout",
  409 => "Conflict",
  410 => "Gone",
  411 => "Length Required",
  412 => "Precondition Failed",
  413 => "Request Entity Too Large",
  414 => "Request-URI Too Long",
  415 => "Unsupported Media Type",
  416 => "Requested Range Not Satisfiable",
  417 => "Expectation Failed",

  // Server error
  500 => "Internal Server Error",
  501 => "Not Implemented",
  502 => "Bad Gateway",
  503 => "Service Unavailable",
  504 => "Gateway Timeout",
  505 => "HTTP Version Not Supported",
);
