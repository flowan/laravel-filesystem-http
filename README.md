# Filesystem HTTP Adapter for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/flowan/laravel-filesystem-http.svg?style=flat-square)](https://packagist.org/packages/flowan/laravel-filesystem-http)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/flowan/laravel-filesystem-http/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/flowan/laravel-filesystem-http/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/flowan/laravel-filesystem-http/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/flowan/laravel-filesystem-http/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/flowan/laravel-filesystem-http.svg?style=flat-square)](https://packagist.org/packages/flowan/laravel-filesystem-http)

This package provides a filesystem adapter for Laravel that allows you to use an HTTP API as a filesystem.

## Installation

You can install the package via composer:

```bash
composer require flowan/laravel-filesystem-http
```

## Usage

Put the following in your `config/filesystems.php` file:

```php
<?php

return [
    'disks' => [
        // ...
        
        'warehouse' => [
            'driver' => 'http',
            'token' => env('WAREHOUSE_TOKEN'),
            'url' => env('WAREHOUSE_URL'),
            'public_url' => env('WAREHOUSE_PUBLIC_URL', env('WAREHOUSE_URL')),
            'bucket' => env('WAREHOUSE_BUCKET'),
            'include_bucket_prefix_in_url' => env('WAREHOUSE_INCLUDE_BUCKET_PREFIX_IN_URL', true),
            'include_bucket_in_url' => env('WAREHOUSE_INCLUDE_BUCKET_IN_URL', true),
            'throw' => false,
        ],
        
    ],
];
```

And add the following to your `.env` file:

```dotenv
WAREHOUSE_TOKEN=your-token
WAREHOUSE_URL=https://cdn.example.com
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jesse Visser](https://github.com/flowan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Todo

- Implement `readStream` and `writeStream` methods.
- Implement `setVisibility` method.
