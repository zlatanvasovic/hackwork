# Hackwork

> Layout-based PHP micro-framework for full-stack HTML5 sites

Hackwork is a layout-based PHP micro-framework made for HTML5 sites. You can
also make HTML4 sites with Hackwork, don't worry.

Minimal required PHP version is 5.3.0. Hackwork may work on PHP 5.2.0, but it's
not officially supported.

## Table of contents

- [Example](#example)
- [Directory structure](#directory-structure)
- [Core](#core)
- [Layouts](#layouts)
- [HTTP](#http)
- [Errors](#errors)
- [Contributing](#contributing)
- [License](#license)

## Example

```php
<?php
require_once 'core/hackwork.php';
layout('default', 'home');
```

## Directory structure

Hackwork projects should have a simple directory structure.

```
.
├── assets/
│   ├── css/
│   ├── fonts/
│   ├── img/
│   ├── js/
│   ├── ...
├── core/
│   ├── helpers/
│   ├── hackwork.php
├── data/
│   ├── ...
└── layouts/
    └── .../
        ├── footer.php
        ├── header.php
        ├── i.functions.php
        ├── i.variables.php
        └── ...
```

`assets/` is the place of cachable resources (e.g. JavaScript).

`core/` is the place of framework core.

`data/` is the place of pages content.

`layouts/` is the base layouts directory.

## Core

### Constants

There are constants for paths and settings.

#### Paths

- `ROOT`: server root path; don't change if not necessary
- `PATH`: site root path
- `CORE`: framework core path, `PATH`-relative
- `HELPERS`: helpers path, `CORE`-relative
- `LAYOUTS`: layouts path, `PATH`-relative
- `DATA`: data files path, `PATH`-relative
- `ASSETS`: assets path, isn't `PATH`-relative
- `CSS`: stylesheets path, `ASSETS`-relative
- `JS`: JavaScript files path, `ASSETS`-relative
- `FONTS`: fonts path, `ASSETS`-relative
- `IMG`: images path, `ASSETS`-relative

Omit trailing slashes in path constants.

#### Environment

Here is the environment constant, `ENV`. Its values are:

- `development`: complete error reporting
- `production`: reduced error reporting

### Settings

Server configuration is in the `core/helpers/config.php`. You should edit it to
adjust the settings.

#### Compression

Pages loads faster when compression is turned on, so Hackwork enables it by
default.

#### Default timezone

PHP requires default timezone for proper working of time functions. You should
change the timezone if your timezone isn't UTC.

### Helpers

Hackwork has some helpers, e.g. to make layout. All of them are in the
`core/helpers/` and they're dynamically imported to `core/hackwork.php`.

## Layouts

Hackwork uses layouts concept as page generating model.

### Layout basics

Layouts are like page templates. You don't need to learn new templating
language as Hackwork uses pure PHP syntax, though.

#### Layout sections

- `header.php`: page top
- page content (loaded from `data/`)
- `footer.php`: page bottom

#### Other layout files

Use `i.` prefix for layout files that should be included in layout. Core `i.`
files are:

- `i.variables.php`: layout variables
- `i.functions.php`: layout functions

You can create additional `i.` files, e.g. for constants and classes.

### Layout generator

To generate layout, use `layout($layout, $data, $page_title)` function.

### Default layout

Default layout is just a template. It lies within `layouts/default/`.

#### Default layout variables

Default layout variables are in `layouts/default/i.variables.php`.

##### Default layout base variables

- `$doctype`: document type

##### Default layout meta variables

- `$charset`: character set
- `$meta`: `<meta>` tags content array
  - `$meta['site_title']`: site title
  - `$meta['author']`: site author
  - `$meta['description']`: site description
  - `$meta['keywords']`: site keywords separated with comma
  - `$meta['robots']`: robots meta setting
  - `$meta['viewport']`: visible part of canvas at page
- `$title_divider`: divider between page and site title
- `$title`: generated title

##### Default layout assets variables

- `$stylesheet`: `<link rel="stylesheet">` tags content array
- `$icon`: `<link rel="*icon">` tags content array
  - `$icon['favicon']`: favicon path
  - `$icon['apple_touch_icon']`: Apple touch icon path
- `$script`: `<script>` tags content array

##### Default layout copyright variables

- `$cpsign`: copyright sign
- `$cpyear`: first copyright year
- `$cpowner`: copyright owner
- `$copyright`: copyright text

#### Default layout functions

Default layout functions are in `layouts/default/i.functions.php`.

##### Default layout generation functions

- `make_meta($array)`: generates `<meta>` tags from given array
- `make_stylesheets($array)`: generates `<link rel="stylesheet">` tags from
  given array
- `make_icons($array)`: generates `<link rel="*icon*">` tags from given array
- `make_scripts($array)`: generates `<script>` tags from given array

##### Default layout basic functions

- `is_currentfile($file)`: checks is the given argument current file
- `filecount($dir, $ignore)`: counts files in a directory
- `cat($url, $pre)`: imitates `cat` Unix command
- `randomval($array)`: selects a random value from array
- `undot($string)`: removes dots from string

### New layout

To make new layout, create a new directory within `layouts/` and follow
[layout basics](#layout-basics). You can use [default layout](#default-layout)
as template.

## HTTP

Hackwork caches HTTP properties and header messages for easier HTTP control.

### HTTP properties

- `$httpv`: HTTP version; don't change if not necessary

### HTTP headers

`$header` is array of HTTP header messages. You can use headers with
`$header['status-number']`.

There is also a charset definition to ensure right charset is used everywhere.
You may want to change its value per your needs.

## Errors

Hackwork has simple error thrower.

### Exit status codes

- `EXIT_SUCCESS`: no errors
- `EXIT_ERROR`: generic error
- `EXIT_CONFIG`: configuration error
- `EXIT_UNKNOWN_FILE`: file not found
- `EXIT_UNKNOWN_CLASS`: unknown class
- `EXIT_UNKNOWN_METHOD`: unknown class member
- `EXIT_USER_INPUT`: invalid user input
- `EXIT_DATABASE`: database error
- `EXIT_AUTO_MIN`: minimal automatically-assigned error code
- `EXIT_AUTO_MAX`: maximal automatically-assigned error code

### Error thrower

To throw error and terminate current script, use
`throwerr($msg, $header_msg, $header_status, $exit_status)`.

## Contributing

Want to contribute? Check out
[contributing guide](https://github.com/ZDroid/hackwork/blob/master/CONTRIBUTING.md).

## License

MIT &copy; [Zlatan Vasović](https://github.com/ZDroid)
