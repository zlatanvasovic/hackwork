# Hackwork

**Hackwork** (hack + framework) is a simple PHP framework for easy making HTML5
sites.

Built with &#9733; and PHP5. Use Hackwork with PHP 5.2 and better.

Licensed under the terms of MIT license.

## Usage

Hackwork's PHP features can be easily included in any `.php` file. Example
content:

```php
<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$slug = 'Page';
$content = 'This is a page.';
include_once "$root/layouts/default.php";
?>
```

Fill `$content` with page content, per `layouts/*.php`.

## Variables

Core variables are located in `core/variables.php`.

**Base:**

* `$encoding` — page character encoding
* `$title` — site title
 * `$slug` — page title
* `$description` — site description
* `$author` — full name of site author
* `$keywords` — search keywords separated with comma (it isn't array)
* `$robots` — robots meta setting
* `$viewport` — visible part of canvas at page
* `$styles` — link to base styles
* `$favicon` — link to favicon

**Copyright:**

* `$cpowner` — copyright owner
* `$cpyear` — first year of copyright
* `$copy` — copyright text

**Special:**

* `$root` - must be defined at start of every page, default value is
`$_SERVER['DOCUMENT_ROOT']`
* `$content` — page content, must be defined in every page

## Functions

Put your functions in `core/functions.php`.

Here is some helper functions:

* `encrypt($str)` — encrypts `$str` in rot13
* `decrypt($str)` — decrypts `$str` from rot13
* `cfile($file)` — checks for current file
* `fcount($dir)` — counts number of files in a directory
* `feedparse($url)` — parses RSS feeds easily

## Includes

Use `includes/` directory for includes.

Here is two main includes:

* `meta.php` — `<head>` content
* `footer.php` — copyright info

## Layouts

Use `layouts/` directory for page layouts.

Here is just default layout, `default.php`.

Using layouts is simple:

```php
<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$content = 'This is content, placed per layouts/layout-name.php.';
include_once 'layouts/layout-name.php';
?>
```

## PHP configuration

Example PHP configuration for Hackwork is located in `etc/php.ini`. It
contains required settings.

## Directory organization

By default, Hackwork uses following directory organization:

```
.
├── assets/
│   ├── css/
│   ├── font/
│   ├── img/
│   ├── js/
├── core/
│   ├── functions.php
│   ├── variables.php
├── include/
│   ├── footer.php
│   ├── meta.php
└── layouts/
    └── default.php
```

`assets/` directory isn't included, but it's default directory for things like CSS, JS, images and fonts.