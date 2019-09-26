# Encrypter

[![GitHub release](https://img.shields.io/github/release/codezero-be/encrypter.svg)]()
[![License](https://img.shields.io/packagist/l/codezero/encrypter.svg)]()
[![Build Status](https://scrutinizer-ci.com/g/codezero-be/encrypter/badges/build.png?b=master)](https://scrutinizer-ci.com/g/codezero-be/encrypter/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/codezero-be/encrypter/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/codezero-be/encrypter/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/codezero-be/encrypter/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/codezero-be/encrypter/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/codezero/encrypter.svg)](https://packagist.org/packages/codezero/encrypter)

[![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/R6R3UQ8V)

#### Encrypt and decrypt strings in PHP.

This package includes an adapter for [Laravel](http://laravel.com/)'s `Encrypter` that adheres to my `Encrypter` interface.
This can be used in vanilla PHP. Other implementations might be added in the future.

## Installation

Install this package through Composer:

```php
composer require codezero/encrypter
```

## Vanilla PHP Implementation

Autoload the vendor classes:

```php
require_once 'vendor/autoload.php'; // Path may vary
```

Choose a key. You will need the same key that was used to encrypt a string, to decrypt it.

```php
$key = 'my secret key';
```
 
And then use the `DefaultEncrypter` implementation:

```php
$encrypter = new \CodeZero\Encrypter\DefaultEncrypter($key);
```

## Usage

### Encrypt a string

```php
$encrypted = $encrypter->encrypt('some string');
```

### Decrypt an encrypted string

```php
try {
    $decrypted = $encrypter->decrypt($encrypted);
} catch (\CodeZero\Encrypter\DecryptException $exception) {
    // Decryption failed...
}
```

## Testing

```
$ composer run test
```

## Security

If you discover any security related issues, please [e-mail me](mailto:ivan@codezero.be) instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
