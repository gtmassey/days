# Days.php

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gtmassey/days.svg?style=flat-square)](https://packagist.org/packages/gtmassey/days)
[![Tests](https://img.shields.io/github/actions/workflow/status/gtmassey/Days/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gtmassey/Days/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/gtmassey/days.svg?style=flat-square)](https://packagist.org/packages/gtmassey/days)

Simple helper class for accessing the days of the week as strings in PHP.

> <p style="color: #f85c5c; font-weight: bold;">Note from the developer:</p> 
> 
> This package is literally only one class. I will likely never update this package again. I just wanted to make a simple helper class for switching between days as names and as abbreviations in a separate project. If you have any suggestions for features or ideas, feel free to fork!
> 
> Thanks,
> 
> Garrett

## Installation

You can install the package via composer:

```bash
composer require gtmassey/days
```

## Usage

To use, you can either create a new days object with the `new` keyword, or you can use the `make` static method, or you can call the day of week directly as a static method:

```php
use Gtmassey\Days\Days;

$monday = new Days('Monday');
$tuesday = Days::make('Tuesday');
$wednesday = Days::Wednesday();
```

Once you have a `Days` object, you can call the various methods to return the day of the week as a specific English formatted string:

```php

$monday->asCharacterCode();      //'M'
$monday->asShortName();          //'Mon'
$sunday->asCharacterCode();      //'U'
$thursday->asFullName();         //'Thursday'
```

The character codes use `R` for Thursday to avoid confusion with Tuesday and `U` for Sunday to avoid confusion with Saturday.

## Testing

To run the testsuite, run the following command:

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
