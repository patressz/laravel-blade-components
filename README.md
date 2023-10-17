# Laravel basic blade components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/patressz/laravel-blade-components.svg?style=flat-square)](https://packagist.org/packages/patressz/laravel-blade-components)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/patressz/laravel-blade-components/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/patressz/laravel-blade-components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/patressz/laravel-blade-components/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/patressz/laravel-blade-components/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/patressz/laravel-blade-components.svg?style=flat-square)](https://packagist.org/packages/patressz/laravel-blade-components)

## Installation

You can install the package via composer:

```bash
composer require patressz/laravel-blade-components
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="blade-components-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="blade-components-views"
```

## Usage

To use the components, follow the standard Blade Component syntax. By default, all form components come with the form prefix.

Optionally, you can change the prefix of the components by publishing the configuration file and then changing the value of the `form` key to something else.

### Input Component

```php
<x-form::input />
```

Attributes:
- **variable** (required)
- **type** (default: `text`)
- **label** (default: `null`)
- **placeholder** (uses `label` if not set)
- **value** (default: `null`)
- **required** (default: `false`)
- **disabled** (default: `false`)

Example:
```blade
<x-form::input 
    variable="username"
    label="Username"
    placeholder="Enter your username"
    :required="true"
/>
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

- [Patrik Strišovský](https://github.com/patressz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
