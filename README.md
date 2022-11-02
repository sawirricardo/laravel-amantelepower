# Amantelepower notification channel for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-amantelepower.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-amantelepower)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-amantelepower/run-tests?label=tests)](https://github.com/sawirricardo/laravel-amantelepower/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-amantelepower/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/sawirricardo/laravel-amantelepower/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-amantelepower.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-amantelepower)

Use Amantelepower in your Laravel apps.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-amantelepower.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-amantelepower)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/laravel-amantelepower
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-amantelepower-config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('AMANTELEPOWER_API_KEY'),
    'client_id' => env('AMANTELEPOWER_CLIENT_ID'),
    'sender_id' => env('AMANTELEPOWER_SENDER_ID'),
];
```

## Usage

Use in your Laravel Notification class

```php
 Sawirricardo\LaravelAmantelepower\Facades\LaravelAmantelepower::sendSms('phoneNumber', 'Hello, world');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
