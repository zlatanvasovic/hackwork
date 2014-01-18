# Hackwork

> Layout-based PHP micro framework for full-stack HTML5 sites

You can also make HTML4 sites with Hackwork, it doesn't care. Minimum PHP
version is 5.2.17.

## Table of contents

* [Example](#example)
* [Core](#core)
* [Layouts](#layouts)
* [HTTP](#http)
* [Errors](#errors)
* [Directory structure](#directory-structure)
* [Contributing](#contributing)
* [License](#license)

## Example

```php
<?php
require_once 'core/hackwork.php';
_layout('default', 'home');
```

## Core

### Prefix

Underscore (`_`) is prefix for framework variables and functions, but not for
constants.

### Constants

Hackwork uses constants for paths and settings. Framework constants are always
in upper case.

#### Path constants

* `ROOT`: server root path; don't change if not necessary
* `PATH`: site root path
* `ASSETS`: assets path, isn't `PATH`-relative
* `CORE`: framework's core path, `PATH`-relative
* `DATA`: data files path, `PATH`-relative
* `LAYOUTS`: layouts path, `PATH`-relative

Omit trailing slashes in path constants.

#### Environment constants

Here is just one environment constant, `ENVIRONMENT`. Its value can be
`development` (full error reporting) and `production` (reduced error
reporting).

### Helpers

Hackwork has some helpers, e.g. to make layout or configure HTTP.

## Layouts

There is layout generator and basic layout template.

### Layout generator

to generate layout, use `_layout($layout, $data, $page_title)`.

### Default layout

Default layout is just a template. It lies within `layouts/default/`.

#### Default layout variables

Default layout variables are in `layouts/default/set.variables.php`.

##### Default layout base variables

* `$doctype`: document type

##### Default layout meta variables

* `$charset`: character set
* `$meta`: `<meta>` tags content array
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

##### Default layout copyright variables

* `$cpsign`: copyright sign
* `$cpyear`: first year of copyright
* `$cpowner`: copyright owner
* `$copyright`: copyright text

#### Default layout functions

Default layout functions are in `layouts/default/set.functions.php`.

##### Default layout generation functions

* `_make_meta($array)`: generate `<meta>` tags
* `_make_link($array)`: generate `<link>` tags

##### Default layout basic functions

* `is_currentfile($file)`: is the given argument current file
* `filecount($dir, $ignore)`: counts files in a directory
* `feedparse($url, $pre)`: parses RSS or Atom feed
* `selectrandom($array)`: selects a random value from array
* `undot($string)`: removes dots from string

### New layout

To make new layout, create a new directory within `layouts/`.

There are 3 parts of layout:

* `header.php`: top of page
* page content
* `footer.php`: bottom of page

You have to set variables and functions. Use `set.` prefix for layout files
that don't automatically generate markup.

* `set.variables.php`: layout variables
* `set.functions.php`: layout functions

Every `set.*.php` file in `layouts/<name>/` should be included in layout. You
can create additional `set.` files, e.g. for constants and classes.

## HTTP

HTTP helper defines header statuses and base HTTP settings (e.g. encoding).

### HTTP properties

* `$_httpv`: HTTP version; don't change if not necessary

### HTTP headers

`$_header` is array of HTTP headers. You can use headers with
`$_header['status-number']`.

## Errors

Error helper defines exit status codes and throws errors.

### Exit status codes

* `EXIT_SUCCESS`: no errors
* `EXIT_ERROR`: generic error
* `EXIT_CONFIG`: configuration error
* `EXIT_UNKNOWN_FILE`: file not found
* `EXIT_UNKNOWN_CLASS`: unknown class
* `EXIT_UNKNOWN_METHOD`: unknown class member
* `EXIT_USER_INPUT`: invalid user input
* `EXIT_DATABASE`: database error
* `EXIT_AUTO_MIN`: minimum automatically-assigned error code
* `EXIT_AUTO_MAX`: maximum automatically-assigned error code

## Error thrower

To throw error and terminate current script, use
`_throwerr($msg, $header_msg, $header_status, $exit_status)`.

## Directory structure

Hackwork projects should have simple directory structure.

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

`assets/` is place of cachable resources (e.g. JavaScript).

`core/` is place of Hackwork's core.

`data/` is place of pages content.

`layouts/` is base layouts directory.

## Contributing

Want to contribute? Check out
[contributing guide](https://github.com/ZDroid/hackwork/blob/master/CONTRIBUTING.md).

## License

MIT &copy; [Zlatan Vasović](https://github.com/ZDroid)