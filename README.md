# Fyluploader plugin for CakePHP

## Installation

// In config/bootstrap.php
// Loads a single plugin
Plugin::load('Fyluploader');

you may need to modify your application’s composer.json file to contain the following information:
 "autoload": {
"psr-4": {
    (...)
    "Fyluploader\\": "./plugins/Fyluploader/src",
  }
}
"autoload-dev": {
        "psr-4": {
            (...)
             "Fyluploader\\Test\\": "./plugins/Fyluploader/tests"
        }
    }
You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require your-name-here/fyluploader
```
