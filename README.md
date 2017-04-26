# selenium-server-standalone

![Travis CI](https://travis-ci.org/sveneisenschmidt/selenium-server-standalone.svg?branch=master) [![Latest Stable Version](https://poser.pugx.org/se/selenium-server-standalone/v/stable)](https://packagist.org/packages/se/selenium-server-standalone) [![Total Downloads](https://poser.pugx.org/se/selenium-server-standalone/downloads)](https://packagist.org/packages/se/selenium-server-standalone) [![Latest Unstable Version](https://poser.pugx.org/se/selenium-server-standalone/v/unstable)](https://packagist.org/packages/se/selenium-server-standalone) [![License](https://poser.pugx.org/se/selenium-server-standalone/license)](https://packagist.org/packages/se/selenium-server-standalone)


Composer distribution of Selenium Server Standalone, the browser automation framework.

## Installation

#### Inside your composer-powered project
```bash
composer require se/selenium-server-standalone
```

#### Standalone

```bash
composer install
```

The command `composer install` will make the selenium executable from inside `bin`.

## Usage

```bash
$ bin/selenium-server-standalone
```

Arguments are supported.

```bash
$ bin/selenium-server-standalone -port 4445
```

## Known Issues

1. Arguments/Web Driver configuration
Due to changes how Selenium handles arguments/system properties (see [Issue #2566](https://github.com/SeleniumHQ/selenium/issues/2566)), system properties (-D...) can not be passed though the `bin/selenium-server-standalone` file anymore, this affects mostly the web driver argument (`-Dwebdriver.*.driver`) (see [Issue #17](https://github.com/sveneisenschmidt/selenium-server-standalone/issues)). The problem is solved by having the driver in your `PATH` variable.

## Tests

```bash
bin/phpunit
```

Release numbers are synchronised with the Selenium versions.
Version of this release is *v3.4.0*
