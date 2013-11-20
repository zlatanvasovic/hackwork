# Hackwork

**Hackwork** (hack + framework) is a simple, layout-based PHP microframework
for making HTML5 sites. You can also make HTML4 sites with it, don't worry.

Licensed under the MIT License.

* **Current version:** 1.1.0
* **Minimum PHP version:** 5.2.17

## Usage

Hackwork's PHP features can be easily included in any PHP file. Example file
with Hackwork's features is `index.php`.

```php
<?php
require_once 'core/hackwork.php';
layout('default', 'home');
```

Edit `data/home.php` to fill up index page.

You can test PHP site with `php -S <target>`.

## Constants

Hackwork uses constants for paths to avoid conflicts with variables. Base
constants are:

* `ROOT` — server root path
* `PATH` — site root path

## Variables

Core variables are located in `core/variables.php`. Links are root-relative.

**Doctype variables:**

* `$doctype` (huh?) — document type

**Meta variables:**

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

**Copyright variables:**

* `$cpowner` — copyright owner
* `$cpyear` — starting year of copyright
* `$copyright` — copyright text

## Functions

Core functions are located in `core/functions.php`.

**Framework functions:**

* `layout($layout, $data)` — generates layout

**Helper functions:**

* `encrypt($str)` — encrypts `$str` with base64
* `decrypt($str)` — decrypts `$str` with base64
* `cfile($file)` — checks for current file
* `fcount($dir)` — counts number of files in a directory
* `feedparse($url)` — parses RSS or Atom feed
* `randomize($array)` — selects a random value from array

## Layouts

`layouts/` directory is used for page layouts.

There is just default layout, `default.php`.

```php
<?php
require_once 'core/hackwork.php';
layout('layout-name', 'data-file');
```

### Making new layout

To make new layout, add new folder within `layouts/`.

There are two paths of layout:

* `header.php` — start of page, mostly `<head>` content
* `footer.php` — end of page

Use `layout()` to include specific layout into file.

## Data

`data/` is used as place from which page contents are served.

Just use `layout()` to specify data file from which content will be served.

## PHP configuration

Example PHP configuration for Hackwork is located in `etc/php.ini`. It
contains core settings.

For complete list of settings look at
[configuration template](http://www.reallylinux.com/docs/php.ini).
[Official docs](http://php.net/manual/en/ini.php) may be useful, also.

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

`etc/` isn't in default directory organization, because it's just place where
config lies.

## Bonuses

* Hackwork isn't server-specific, so you can run it on whatever server you
want.
* Every `.php` file in `core/`, except `hackwork.php` is included in default
layout. There are variables and functions, but you can also add other things,
like classes.
* Copyright info is included in default footer (`layouts/default/footer.php`).
* There is [a repository shortlink](http://git.io/hackwork) if you can't
remember URL of the repository.