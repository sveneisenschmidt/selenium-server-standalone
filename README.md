# selenium-server-standalone

Composer distribution of Selenium Server Standalone, the browser automation framework. 
Adds a executable to your `bin` directory.


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

## Tests

```bash
bin/phpunit
```

Release numbers are synchronised with the Selenium versions.
Version of this release is *v2.46.0*
