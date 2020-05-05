# Covid
A laravel package for fetching covid-19 data across the world

## Installation

You can install the package using composer

```
$ composer require dotman/covid

```


## Usage

You can use it in your controller like so:

```php
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Dotman\Covid\Covid;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    /**
     * Get all states
     * @return array
     */
    public function getAllStates()
    {
        return $this->ngsc->getAllStates();
    }
}
```

```php

/**
 * Gets all the states in Nigeria
 * @return array
 */
Ngsc::getAllStates()

/**
 * Gets the details of just one state, e.g capital, lat, lng
 * @param string  state or state code
 * @return array
 */
Ngsc::getOneState('lagos') OR Ngsc::getOneState('LA')

/**
 * Gets the local government areas of just one state
 * @param string  state or state code
 * @return array
 */
Ngsc::getLGAS('lagos') OR Ngsc::getLGAS('LA')

/**
 * Gets the cities of just one state
 * @param string  state or state code
 * @return array
 */
Ngsc::getCities('lagos') OR Ngsc::getCities('LA')
```

## Appreciation

Huge thanks go to the [Kyle Redelinghuys](https://twitter.com/ksredelinghuys) crew for providing a fluent and awesome API

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/oluwalosheyii)!

Thanks!
Kasim Ridwan.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
