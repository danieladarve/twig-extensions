Carter Digital/Wongdoody AU's Twig extensions pack.
=======================

Custom Twig functions used for our websites since 2020.

## Installation
Should be easily installed using [composer](http://getcomposer.org/)

    composer require carter-digital/twig-extensions

## Extensions

### PHP function based
* getenv() - implementation of PHP/Craft's getenv()
* isEnglish() - implementation of PHP's preg_match to find alphanumeric latin symbols in a string
* manifestFile() - cache busting helper function
* md5() - implemenation of PHP's md5()
* pathinfo() - implementation of PHP's pathinfo()
* uniqueId() - implementation of PHP's rand()

### CraftCMS based
* Filters
    * text|t - returns the same text
* Functions
    * svg('filepath') - returns file_get_contents() of the filepath

## Credits:
Heavily based on jasny/twig-extensions package.