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
layout('default', 'home');
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

* `layout($layout, $data, $page_title)` — generates layout

### Default layout

**Helper functions:**

* `is_curentfile($file)` — checks for current file
* `filecount($dir, $ignore)` — counts number of files in a directory
* `feedparse($url, $pre)` — parses RSS or Atom feed
* `selectrandom($array)` — selects a random value from array
* `undot($string)` — removes dots from string

## Layouts

`layouts/` directory is page layouts directory.

There is just default layout, `default.php`.

```php
<?php
require_once 'path-to/core/hackwork.php';
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

`set.` is prefix for layout files that don't generate markup.

Use `layout()` to include specific layout into file.

## Data

`data/` is place where is content of pages.

Use `layout()` to specify data file.

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

### Reporting issues

I only accept issues that are bug reports or feature requests. Bugs must be
isolated and reproducible problems that I can fix within the Hackwork core. It
may not be reproducible 100% of the time, but if you can provide proof, I'll
look into it. I can't fix errors with your web server, but I can help. Please
read the following guidelines before opening any issue.

* **Search for existing issues.** To be honest, it's painful to go through a
lot of duplicate issues. You help me out a lot by first checking if someone
else has reported the same issue. Also, the issue may have already been
resolved with a fix available.
* **Be sure that the bug is in the Hackwork core.** I can't fix errors with
your web server, sorry. I can help, though. If you report a bug in Microsoft
Office, I'll just go wtf and delete the report.
* **Share as much information as possible.** Tell us what operating system and
web server you're using, what customizations you did and other important
factors where appropriate. Include the steps with which you can reproduce the
bug, if possible.

### Pull requests

* **Don't pollute your pull request with unintended changes.** Don't rewrite
our whole code in just one pull request.
* If possible, share which servers your code has been tested in before
submitting a pull request.

### Coding standards

#### Golden rule

> All code in any code base should look like a single person typed it, no
matter how many people contributed.

#### Wrapping code

There isn't strict limit for lenght of code lines. 120 characters are maximum,
80 characters are recommended.

#### Writing text

Always write sentences, including headings and code comments, in sentence case,
never in title case.

#### Writing code

* 2 spaces (no tabs)
* Newline after namespace
* Group uses
* Opening braces for functions and classes go on the function (class) name
line, and closing braces go on the next line after the body
* Space before opening brace (`{`) in functions and classes
* Omit closing tag in PHP only files
* Keywords in lower case
* Put a space before opening brace (`(`) in keyword functions, otherwise don't
do it

### License

By contributing your code, you agree to license your contribution under the MIT
license.

## Bonuses

* Hackwork isn't server-specific, so you can run it on whatever server you
want.
* Every `set.*.php` file in `layouts/*/` is in layout. There are variables and
functions, but you can also add other things, like classes and constants.
* Copyright info is in default footer (`layouts/default/footer.php`).
* There is [a repository short link](http://git.io/hackwork) if you can't
remember URL of the repository.