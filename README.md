# This package is a clone of "caffeinated/shinobi".

Therefore we will keep your previous license. With some minor modifications, it works from laravel 6.0 onwards, not yet compatible with laravel 9, for laravel less than version 6 use the original owner's package [![Source](https://img.shields.io/badge/source-Caffeinated/shinobi-blue.svg?style=flat-square)](https://github.com/caffeinated/shinobi)

---

# Uboratechno Shinobi
[![Source](https://img.shields.io/badge/source-Uboratechno/shinobi-blue.svg?style=flat-square)](https://github.com/uboratechno/shinobi)
[![Latest Stable Version](https://poser.pugx.org/Uboratechno/shinobi/v/stable?format=flat-square)](https://packagist.org/packages/uboratechno/shinobi)
[![Total Downloads](https://img.shields.io/packagist/dt/Uboratechno/shinobi.svg?style=flat-square)](https://packagist.org/packages/uboratechno/shinobi)

A simple and light-weight role-based permissions system for Laravel's Authorization Gate system. Originally developed for [FusionCMS](https://github.com/fusioncms/fusioncms), an open source content management system.

- Every user can have zero or more permissions.
- Every user can have zero or more roles.
- Every role can have zero or more permissions.
- Every role can have one of two special flags, `all-access` and `no-access`

## Installation
Simply install the package through Composer. From here the package will automatically register its service provider and `Shinobi` facade.

```
composer require uboratechno/shinobi
```

### Config
To publish the config file, run the following:

```
php artisan vendor:publish --provider="Uboratechno\Shinobi\ShinobiServiceProvider" --tag="config"
```

## Changelog
You will find a complete changelog history within the [CHANGELOG](CHANGELOG.md) file.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Testing
Run tests with PHPUnit:

```bash
vendor/bin/phpunit
```

## Security
If you discover any security related issues, please email playbert.ronaldo@gmail.com & Uboratechno@gmail.com directly instead of using the issue tracker.

## Credits
- [Shea Lewis](https://github.com/kaidesu)
- [Playbert Ronaldo](https://github.com/Playbert)
- [All Contributors](../../contributors)

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
