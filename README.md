# Covid

A laravel package for fetching covid-19 data across the world

## Installation

You can install the package using composer

```
$ composer require dotman/laravel-covid

```

## Usage

You can use it in your controller like so:

```php
<?php
namespace App\Http\Controllers;

use Dotman\Covid\Covid;

/**
 * Gets all the affected countries
 * @return array
 */
Covid::getCountries()

/**
 * Gets cases per country
 * @param string  country Slug from the all countries results
 * @return array
 */
Covid::getCasesPerCountry($slug)

/**
 * Gets total cases per country
 * @param string  country Slug from the all countries results
 * @return array
 */
Covid::getTotalCasesPerCountry($slug)

/**
 * Get cases per country by passing the country slug and status
 * @param string  country Slug and status could either be confirmed, recovered, deaths.
 * @return array
 */
Covid::getCasesPerCountryPerStatus($slug, $status)

/**
 * Get total cases per country by passing the country slug and status
 * @param string  country Slug and status could either be confirmed, recovered, deaths.
 * @return array
 */
Covid::getTotalCasesPerCountryPerStatus($slug, $status)

/**
 * Summary of new and total cases per country
 * @param string  state or state code
 * @return array
 */
Covid::getSummary()

```

## Appreciation

Huge thanks go to the [Kyle Redelinghuys](https://twitter.com/ksredelinghuys) crew for providing a fluent and awesome API

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter.

Don't forget to [follow me on twitter](https://twitter.com/oluwalosheyii)!

Thanks!
Kasim Ridwan.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
