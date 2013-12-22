# Hackwork

> Simple, layout-based PHP micro framework for making HTML5 sites

You can also make HTML4 sites with Hackwork, it doesn't care.

Licensed under the MIT License.

**Current version:** 1.2.0  
**Minimum PHP version:** 5.2.17

## Table of contents

* [Example](#example)
* [Core](#core)
* [Layouts](#layouts)
* [Data](#data)
* [Directory organization](#directory-organization)
* [Contributing](#contributing)
* [To do](#to-do)

## Example

```php
<?php
require_once 'core/hackwork.php';
_layout('default', 'home');
```

## Core

### Constants

Hackwork uses constants for paths and settings. Base constants are:

* `ROOT` — local site root path
* `PATH` — server site root path
* `ASSETS` — assets path, isn't `PATH`-relative
* `DATA` — data files path, `PATH`-relative
* `LAYOUTS` — layouts path, `PATH`-relative
* `ENVIRONMENT` — application environment

Omit trailing slashes in path constants.

### Helpers

Hackwork has some basic helpers, e.g. to configure HTTP, or make layout.

### Functions

**Framework functions**

* `_layout($layout, $data, $page_title)` — generates layout

### Prefix

Underscore (`_`) is base prefix for framework-specific variables and functions.

## Layouts

`layouts/` directory is page layouts directory.

```php
<?php
require_once 'core/hackwork.php';
_layout('layout-name', 'data-file', 'page-title');
```

By the way, you don't need to specify page title.

### Default layout

Default layout is Hackwork layout template. It lies within `layouts/default/`.

#### Variables

Default layout variables are in `layouts/default/set.variables.php`.

**Base variables**

* `$doctype` — document type

**Meta variables**

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

**Copyright variables**

* `$cpsign` — copyright sign
* `$cpyear` — initial year of copyright
* `$cpowner` — copyright owner
* `$copyright` — copyright text

#### Functions

Default layout functions are in `layouts/default/set.functions.php`.

**Basic functions**

* `is_curentfile($file)` — checks for current file
* `filecount($dir, $ignore)` — counts files in a directory
* `feedparse($url, $pre)` — parses RSS or Atom feed
* `selectrandom($array)` — selects a random value from array
* `undot($string)` — removes dots from string

### Making new layout

To make new layout, create new folder within `layouts/`.

**Layout parts**

* `header.php` — top of page, mostly `<head>` content
* page content
* `footer.php` — bottom of page

You need to set variables and functions for each layout. Use `set.` prefix for
layout files that don't generate markup.

* `set.variables.php` — layout variables
* `set.functions.php` — layout functions

Every `set.*.php` file in `layouts/*/` should be included in layout. You can
add special `set.` files, e.g. for constants and classes.

## Data

`data/` is place where is content of pages.

## Directory organization

Hackwork has classic directory organization.

```
.
├── assets/
│   ├── css/
│   ├── fonts/
│   ├── img/
│   ├── js/
├── core/
│   ├── hackwork.php
│   ├── ...
├── data/
│   ├── ...
└── layouts/
    ├── .../
        ├── footer.php
        ├── header.php
        ├── set.functions.php
        └── set.variables.php
```

`assets/` directory isn't included, but it's default directory for cacheable
content, like CSS, JavaScript, images and fonts. Don't put PHP files in
`assets/`!

## Contributing

If you want to contribute to Hackwork, follow
[`CONTRIBUTING.md`](https://github.com/ZDroid/hackwork/blob/master/CONTRIBUTING.md).

## To do

* Improve helper organization.
* Finish HTTP helper.
* Auto-generate meta settings in default layout.