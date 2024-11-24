# This is my package pepe

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jsanchezfactoriabiz/pepe.svg?style=flat-square)](https://packagist.org/packages/jsanchezfactoriabiz/pepe)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jsanchezfactoriabiz/pepe/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jsanchezfactoriabiz/pepe/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jsanchezfactoriabiz/pepe/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jsanchezfactoriabiz/pepe/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jsanchezfactoriabiz/pepe.svg?style=flat-square)](https://packagist.org/packages/jsanchezfactoriabiz/pepe)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jsanchezfactoriabiz/pepe
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="pepe-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="pepe-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="pepe-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$pepe = new Jsanchezfactoriabiz\Pepe();
echo $pepe->echoPhrase('Hello, Jsanchezfactoriabiz!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [canonphp](https://github.com/jsanchezfactoriabiz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
