# Hackwork

**Hackwork** (hack + framework) is a simple, layout-based PHP microframework
for making HTML5 sites. You can also make HTML4 sites with it, don't worry.

Licensed under the MIT License.

* **Current version:** 1.1.0
* **Minimum PHP version:** 5.2.17

## Usage

Hackwork's features are simple to use. Example file with Hackwork's features is
`index.php`.

```php
<?php
require_once 'core/hackwork.php';
layout('default', 'home');
```

Edit `data/home.php` to fill up index page.

You can test PHP site with `php -S <url>`.

## Constants

Hackwork uses constants for paths to avoid conflicts with variables. Base
constants are:

* `ROOT` — server root path
* `PATH` — site root path
* `ASSETS` — assets path
* `DATA` — data files path, `PATH`-relative
* `LAYOUTS` — layouts path, `PATH`-relative

## Variables

Layout variables are in `layouts/*/set.variables.php`.

**Meta variables:**

* `$doctype` — document type
* `$encoding` — page character encoding
* `$site` — site title
* `$title_divider` — divider between page and site title
* `$title` — generated title
* `$author` — full name of site author
* `$description` — site description
* `$keywords` — search keywords separated with comma
* `$robots` — robots meta setting
* `$viewport` — visible part of canvas at page
* `$stylesheet` — location of site styles
* `$favicon` — location of site favicon
* `$apple_touch_icon` — location of apple touch icon

**Copyright variables:**

* `$cpowner` — copyright owner
* `$cpyear` — starting year of copyright
* `$copyright` — copyright text

## Functions

Layout functions are in `layouts/*/set.functions.php`.

**Framework functions:**

* `layout($layout, $data, $title)` — generates layout

**Helper functions:**

* `encrypt($data)` — encrypts `$data` with base64
* `decrypt($data)` — decrypts `$data` with base64
* `cfile($file)` — checks for current file
* `fcount($dir)` — counts number of files in a directory
* `feedparse($url)` — parses RSS or Atom feed
* `randomize($array)` — selects a random value from array
* `undot($string)` — removes dots from string

## Layouts

`layouts/` directory is page layouts directory.

There is just default layout, `default.php`.

```php
<?php
require_once 'core/hackwork.php';
$slug = 'Page';
layout('layout-name', 'data-file', 'page-title');
```

By the way, you don't need to specify page title.

### Making new layout

To make new layout, add new folder within `layouts/`.

There are two paths of layout.

* `header.php` — start of page, mostly `<head>` content
* `footer.php` — end of page

You also need to set functions and variables for each layout.

* `set.functions.php` — layout functions
* `set.variables.php` — layout variables

Use `layout()` to include specific layout into file.

## Data

`data/` is place where is content of pages.

Use `layout()` to specify data file.

## PHP configuration

Example PHP configuration for Hackwork is in `etc/php.ini`. It has core
settings.

For complete list of settings look at
[configuration template](http://www.reallylinux.com/docs/php.ini).
[Official docs](http://php.net/manual/en/ini.php) is useful, also.

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
│   ├── hackwork.php
│   ├── variables.php
├── data/
│   ├── ...
└── layouts/
    ├── .../
        ├── footer.php
        └── header.php
```

`assets/` directory isn't included, but it's default directory for cacheable
content, like CSS, JavaScript, images and fonts. Don't put PHP files in assets!

`etc/` isn't in default directory organization, it's just place where
configuration file lies.

## Bonuses

* Hackwork isn't server-specific, so you can run it on whatever server you
want.
* Every `set.*.php` file in `layouts/*/` is in default layout. There are
variables and functions, but you can also add other things, like classes.
* Copyright info is in default footer (`layouts/default/footer.php`).
* There is [a repository short link](http://git.io/hackwork) if you can't
remember URL of the repository.