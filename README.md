# Hackwork

> Simple, layout-based PHP micro framework for making HTML5 sites

You can also make HTML4 sites with Hackwork, it doesn't care.

Licensed under the MIT License.

**Current version:** 1.2.0  
**Minimum PHP version:** 5.2.17

## Usage

Hackwork's features are simple to use.

```php
<?php
require_once 'path-to/core/hackwork.php';
_layout('default', 'home');
```

Edit `data/home.php` to fill up index page.

You can test PHP site with `php -S <url>`.

## Constants

Hackwork uses constants for paths and settings. Base constants are:

* `ROOT` — local site root path
* `PATH` — server site root path
* `ASSETS` — assets path, isn't `PATH`-relative
* `DATA` — data files path, `PATH`-relative
* `LAYOUTS` — layouts path, `PATH`-relative
* `ENVIRONMENT` — application environment

Omit trailing slashes in path constants.

## Variables

Layout variables are in `layouts/*/set.variables.php`.

### Default layout

**Meta variables:**

* `$doctype` — document type
* `$encoding` — page character encoding
* `$site_title` — site title
* `$title_divider` — divider between page and site title
* `$title` — generated title
* `$author` — full name of site author
* `$description` — site description
* `$keywords` — site keywords separated with comma
* `$robots` — robots meta setting (optional)
* `$viewport` — visible part of canvas at page
* `$stylesheet` — location of site styles
* `$icons` — include or not favicon and Apple touch icon settings
* `$favicon` — location of site favicon
* `$favicon_mime` — auto-generated MIME type of favicon, change only if
necessarily
* `$apple_touch_icon` — location of apple touch icon

**Copyright variables:**

* `$cpsign` — copyright sign
* `$cpyear` — initial year of copyright
* `$cpowner` — copyright owner
* `$copyright` — copyright text

## Functions

Layout functions are in `layouts/*/set.functions.php`.

**Framework functions:**

* `_layout($layout, $data, $page_title)` — generates layout

### Default layout

**Basic functions:**

* `is_curentfile($file)` — checks for current file
* `filecount($dir, $ignore)` — counts files in a directory
* `feedparse($url, $pre)` — parses RSS or Atom feed
* `selectrandom($array)` — selects a random value from array
* `undot($string)` — removes dots from string

## Layouts

`layouts/` directory is page layouts directory.

There is just default layout, `default.php`.

```php
<?php
require_once 'path-to/core/hackwork.php';
_layout('layout-name', 'data-file', 'page-title');
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

`set.` is prefix for layout files that don't generate markup.

Use `_layout()` to include specific layout into file.

## Data

`data/` is place where is content of pages.

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

## Contributing

If you want to contribute to Hackwork, follow
[`CONTRIBUTING.md`](https://github.com/ZDroid/hackwork/blob/master/CONTRIBUTING.md).

## Bonuses

* Hackwork isn't server-specific, so you can run it on whatever server you
want.
* Every `set.*.php` file in `layouts/*/` is in layout. There are variables and
functions, but you can also add other things, like classes and constants.
* Copyright info is in default footer (`layouts/default/footer.php`).
* There is [a repository short link](http://git.io/hackwork) if you can't
remember URL of the repository.

## To do

* Improve helper organization.
* Finish HTTP helper.
* Auto-generate meta settings in default layout.