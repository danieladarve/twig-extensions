Carter Digital's Twig extensions pack.
=======================
Custom Twig functions used for websites since 2020.

## Installation
Should be easily installed using [composer](http://getcomposer.org/)

    composer require carter-digital/twig-extensions

## Key features/notes:
1. Required for Baseline's styleguide implementation.
2. Please keep updating the repo with new extensions - including extensions themselves, and also this readme and changelog (make sure to update versions accordingly).
3. If you add a new extension class, make sure to:
    * follow the existing naming convention for extension classes (unless based on more than one PHP function),
    * update the baseline project of a respective CMS, e.g. the RegisterCartTwigExtensions module in our Craft baseline project repo,
    * write at least the simplest of test for it and make sure that it passes it.

## Extensions:
* getenv() - implementation of PHP/Craft's getenv()
* isEnglish() - implementation of PHP's preg_match to find alphanumeric latin symbols in a string
* uniqueId() - implementation of PHP's rand()

## Credits:
Heavily based on jasny/twig-extensions package.