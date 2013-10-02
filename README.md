# Hackwork

**Hackwork** (hack + framework) is a simple PHP framework for easy making HTML5 sites.

Built with &#9733; and PHP5. Use Hackwork with PHP 5.2 and better.

Licensed under the terms of MIT license.

## Usage

Hackwork's PHP features can be easily included in any `.php` file. Example content:

```php
<?php

$slug = 'Page';
$content = 'This is a page.';
include_once 'layout/default.php';

?>
```

Fill `$content` with page content, per `layout/*.php`.

## Variables

Core variables are located in `core/vars.php`.

**Base:**

* `$encoding` — page character encoding
* `$title` — page title
 * `$site` — name of site
 * `$slug` — name of page, optional
* `$description` — site description
* `$author` — full name of site author
* `$keywords` — search keywords separated with comma (it isn't array)
* `$styles` — link to base styles
* `$favicon` — link to favicon

**Copyright:**

* `$cpyear` — first year of copyright
* `$cyear` — current year, don't change this
* `$copy` — final copyright text

## Functions

Put your functions in `core/fnc.php`.

Here is some helper functions:

* `encrypt($str)` — encrypts `$str` in rot13
* `decrypt($str)` — decrypts `$str` from rot13
* `cfile($file)` — checks for current file
* `fcount($dir)` — counts number of files in a directory
* `feedparse($url)` — parses RSS feed easily

## Includes

Use `include/` directory for includes.

Here is two main includes:

* `meta.php` — `<head>` content
* `footer.php` — copyright info

## Layouts

Use `layout/` directory for page layouts.

Here is just default layout, `default.php`.

Using layouts is simple:
```php
<?php
$content = 'This is content, placed per layout/layout-name.php.';
include_once 'layout/layout-name.php';
?>
```

## PHP configuration

Example PHP configuration for Hackwork is located in `etc/php.ini`. It contains required settings.

## To do

* **[Important]** Use links based on root path, not relative to current file.