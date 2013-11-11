# Hackwork

**Hackwork** (hack + framework) is a simple PHP framework for making HTML5
sites.

Licensed under the MIT License.

* **Current version:** 1.1.0
* **Requires:** PHP 5.2+

## Usage

Hackwork's PHP features can be easily included in any PHP file.

```php
<?php
$slug = 'Page';
$content = 'This is a page.';
include_once $_SERVER['DOCUMENT_ROOT'].'/layouts/default.php';
```

Fill `$content` with page content, per `layouts/*.php`.

You can test the PHP site with `php -S <target>`.

## Variables

Core variables are located in `core/variables.php`. Links in variables are
root-relative.

**Layout:**

* `$root` - root path, must be defined at start of every layout; it's
recommended to keep it same as at default
* `$content` — page content, must be defined in every page

**Meta:**

* `$encoding` — page character encoding
* `$title` — site title
* `$slug` — page title, can be set only in pages
* `$title_divider` — divider between page and site title
* `$author` — full name of site author
* `$description` — site description
* `$keywords` — search keywords separated with comma
* `$robots` — robots meta setting
* `$viewport` — visible part of canvas at page
* `$stylesheet` — location of site styles
* `$favicon` — location of site favicon
* `$apple_touch_icon` — location of apple touch icon

**Copyright:**

* `$cpowner` — copyright owner
* `$cpyear` — starting year of copyright
* `$copyright` — copyright text

## Functions

Core functions are located in `core/functions.php`.

There are some default, helper functions:

* `encrypt($str)` — encrypts `$str` with base64
* `decrypt($str)` — decrypts `$str` with base64
* `cfile($file)` — checks for current file
* `fcount($dir)` — counts number of files in a directory
* `feedparse($url)` — parses RSS or Atom feed
* `randomize($array)` — selects a random value from array

## Includes

Use `includes/` directory for includes.

There are two main includes:

* `meta.php` — `<head>` content
* `footer.php` — copyright info

## Layouts

`layouts/` directory is used for page layouts.

There is just default layout, `default.php`.

```php
<?php
$content = 'This is content, placed per layouts/layout-name.php.';
include_once '$_SERVER['DOCUMENT_ROOT']/layouts/layout-name.php';
```

## PHP configuration

Example PHP configuration for Hackwork is located in `etc/php.ini`. It
contains core settings.

For complete list of settings look at
[configuration template](http://www.reallylinux.com/docs/php.ini).

## Directory organization

Hackwork's default directory organization is:

```
.
├── assets/
│   ├── css/
│   ├── fonts/
│   ├── img/
│   ├── js/
├── core/
│   ├── functions.php
│   ├── variables.php
├── includes/
│   ├── footer.php
│   ├── meta.php
└── layouts/
    └── default.php
```

`assets/` directory isn't included, but it's default directory for things like
CSS, JavaScript, images and fonts.

`etc/` isn't in default directory organization, because of it's just place
where config are stored.

## Bonuses

* Every `.php` file in `core/` is included in default layout. There are
variables and functions, but you can also add other things, like classes.
* Copyright info is included in default footer (`includes/footer.php`).
* There is [a repository shortlink](http://git.io/hackwork) if you can't
remember URL of the repository.