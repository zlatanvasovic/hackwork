# Hackwork

> Layout-based PHP micro framework for full-stack HTML5 sites

You can also make HTML4 sites with Hackwork, it doesn't care.

Licensed under the MIT License.

**Latest Hackwork version:** 1.2.0  
**Minimum PHP version:** 5.2.17

## Table of contents

* [Example](#example)
* [Core](#core)
* [Layouts](#layouts)
* [HTTP](#http)
* [Directory organization](#directory-organization)
* [Contributing](#contributing)

## Example

```php
<?php
require_once 'core/hackwork.php';
_layout('default', 'home');
```

## Core

### Prefix

Underscore (`_`) is base prefix for framework-specific variables and functions.

### Constants

Hackwork uses constants for paths and settings.

**Path constants**

* `ROOT`: server root path
* `PATH`: site root path
* `ASSETS`: assets path, isn't `PATH`-relative
* `CORE`: framework's core path, `PATH`-relative
* `DATA`: data files path, `PATH`-relative
* `LAYOUTS`: layouts path, `PATH`-relative

Omit trailing slashes in path constants.

**Environment constants**

Here is just one environment constant, `ENVIRONMENT`. It can have `development`
(complete error reporting) and `production` (reduced error reporting) values.

### Helpers

Hackwork has some basic helpers, e.g. to configure HTTP, or make layout.

## Layouts

To generate layout, use `_layout($layout, $data, $page_title)` function.

### Default layout

Default layout is just a template. It lies within `layouts/default/`.

#### Variables

Default layout variables are in `layouts/default/set.variables.php`.

**Base variables**

* `$doctype`: document type

**Meta variables**

* `$meta`: `<meta>` tags content array
 * `$meta['encoding']`: character encoding
 * `$meta['site_title']`: site title
 * `$meta['author']`: site author
 * `$meta['description']`: site description
 * `$meta['keywords']`: site keywords separated with comma
 * `$meta['robots']`: robots meta setting
 * `$meta['viewport']`: visible part of canvas at page
* `$title_divider`: divider between page and site title
* `$title`: generated title
* `$link`: `<link>` tags content array
 * `$link['stylesheet']`: stylesheet path
 * `$link['favicon']`: favicon path
 * `$link['apple_touch_icon']`: apple touch icon path

**Copyright variables**

* `$cpsign`: copyright sign
* `$cpyear`: first year of copyright
* `$cpowner`: copyright owner
* `$copyright`: copyright text

#### Functions

Default layout functions are in `layouts/default/set.functions.php`.

**Generation functions**

* `_make_meta($array)`: generate `<meta>` tags
* `_make_link($array)`: generate `<link>` tags

**Basic functions**

* `is_currentfile($file)`: checks for current file
* `filecount($dir, $ignore)`: counts files in a directory
* `feedparse($url, $pre)`: parses RSS or Atom feed
* `selectrandom($array)`: selects a random value from array
* `undot($string)`: removes dots from string

### New layout

To make new layout, create a new directory within `layouts/`.

**Layout parts**

* `header.php`: top of page
* page content
* `footer.php`: bottom of page

You also have to set variables and functions. Use `set.` prefix for layout
files that don't automatically generate markup.

* `set.variables.php`: layout variables
* `set.functions.php`: layout functions

Every `set.*.php` file in `layouts/<name>/` should be included in layout. You
can add special `set.` files, e.g. for constants and classes.

## HTTP

HTTP helper sets base HTTP settings (e.g. encoding) and defines header
statuses.

### Properties

* `$_httpv` — HTTP version; don't change if not needed

### Headers

`$_header` is array of HTTP headers. You can use headers with
`$_header['status-number']`.

## Directory organization

Hackwork projects should have simple directory organization.

```
.
├── assets/
│   ├── css/
│   ├── fonts/
│   ├── img/
│   ├── js/
│   ├── ...
├── core/
│   ├── hackwork.php
│   ├── ...
├── data/
│   ├── ...
└── layouts/
    └── .../
        ├── footer.php
        ├── header.php
        ├── set.functions.php
        ├── set.variables.php
        └── ...
```

`assets/` is directory for cachable resources, e.g. CSS and JavaScript.

`core/` is place of Hackwork's core.

`data/` is place of pages content.

`layouts/` is base layouts directory.

## Contributing

Check out
[contributing guide](https://github.com/ZDroid/hackwork/blob/master/CONTRIBUTING.md).