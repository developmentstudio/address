# Address Information Package

This package is a client for easy retrieval of address information via the zip code API from <http://www.postcodeapi.nu>. 

## Installation
The recommended way to install this package is through [Composer](http://getcomposer.org). Composer can be installed via the instructions below:

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```
Put the following content in the file `composer.json`:

```composer
{
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@github.com:developmentstudio/address.git"
        }
    ],
    "require": {
        "developmentstudio/address": "dev-master"
    }
}
```

Next, run the Composer command to install the latest stable version of this package:

```bash
composer.phar require developmentstudio/address
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

You can then later update the package using composer:

 ```bash
composer.phar update
 ```

## Usage example

```php
define("POSTCODE_API_KEY", "Your API Key From postcodeapi.nu");

$address = PostcodeAPI::getAddressByZipCodeAndNumber("4205AZ", "1");

$street = $address->getStreet();          
echo $street;                                           // Stadhuisplein 1
echo $street->getName();                                // Stadhuisplein
echo $street->getNumber();                              // 1

$city = $address->getCity();                            
echo $city;                                             // Gorinchem

$province = $address->getProvince();      
eco $province;                                          // Zuid-Holland

$gps = $address->getGpsLocation();        
echo $gps;                                              // 51.8323,4.96453
echo $gps->getLatitude();                               // 51.8323
echo $gps->getLongitude();                              // 4.96453
```

## License
Copyright (c) 2015, Development Studio Kevin van Cleef <kevin@developmentstudio.nl>

Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted, provided that the above copyright notice and this permission notice appear in all copies.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
