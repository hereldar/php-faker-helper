FakerHelper
===========

[![PHP][php-badge]][php-url]
[![Code Coverage][codecov-badge]][codecov-url]
[![Type Coverage][shepherd-coverage-badge]][shepherd-url]
[![Psalm Level][shepherd-level-badge]][shepherd-url]
[![Packagist][packagist-version-badge]][packagist-url]
[![License][license-badge]][license-url]

[php-badge]: https://img.shields.io/badge/php-8.1%20to%208.4-777bb3.svg
[php-url]: https://coveralls.io/github/hereldar/php-faker-helper
[codecov-badge]: https://img.shields.io/codecov/c/github/hereldar/php-faker-helper
[codecov-url]: https://app.codecov.io/gh/hereldar/php-faker-helper
[coveralls-badge]: https://img.shields.io/coverallsCoverage/github/hereldar/php-faker-helper
[coveralls-url]: https://coveralls.io/github/hereldar/php-faker-helper
[shepherd-coverage-badge]: https://shepherd.dev/github/hereldar/php-faker-helper/coverage.svg
[shepherd-level-badge]: https://shepherd.dev/github/hereldar/php-faker-helper/level.svg
[shepherd-url]: https://shepherd.dev/github/hereldar/php-faker-helper
[packagist-version-badge]: https://img.shields.io/packagist/v/hereldar/faker-helper.svg
[packagist-downloads-badge]: https://img.shields.io/packagist/dt/hereldar/faker-helper.svg
[packagist-url]: https://packagist.org/packages/hereldar/faker-helper
[license-badge]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[license-url]: LICENSE

Helper package to make it easier to use the [Faker](https://fakerphp.github.io/)
PHP library.

```php
fake()->latitude();
fake('fr_FR')->firstName();
fake()->optional()->creditCardNumber();
```

Highlights
----------

- Ease of use
- Type safety
- Autocompletion

Installation
------------

Via Composer:

```bash
composer require --dev hereldar/faker-helper
```

Development
-----------

Run the following commands from the project folder:

```bash
make tests
make static-analysis
make coding-standards
```

To execute:

- A [PHPUnit](https://phpunit.de) test suite.
- [PHPStan](https://phpstan.org/) and [Psalm](https://psalm.dev/) for
  static code analysis.
- [Easy Coding Standard](https://github.com/easy-coding-standard/easy-coding-standard)
  to fix coding standards.

Documentation
-------------

All Faker formatters and locales are available:

- [Formatters](https://fakerphp.github.io/formatters/)
- [Locales](https://fakerphp.github.io/locales/en_US/)

Credits
-------

- [Samuel Maudo](https://github.com/samuelmaudo)

License
-------

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
