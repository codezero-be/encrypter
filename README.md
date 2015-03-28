# Encrypter

[![GitHub release](https://img.shields.io/github/release/codezero-be/encrypter.svg)]()
[![License](https://img.shields.io/packagist/l/codezero/encrypter.svg)]()
[![Build Status](https://img.shields.io/travis/codezero-be/encrypter.svg?branch=master)](https://travis-ci.org/codezero-be/encrypter)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/codezero-be/encrypter.svg)](https://scrutinizer-ci.com/g/codezero-be/encrypter)
[![Total Downloads](https://img.shields.io/packagist/dt/codezero/encrypter.svg)](https://packagist.org/packages/codezero/encrypter)

#### Encrypt and decrypt strings in PHP.

This package includes an adapter for [Laravel](http://laravel.com/)'s `Encrypter` that adheres to my `Encrypter` interface. This can be used in vanilla PHP. Other implementations might be added in the future.

## Installation

Install this package through Composer:

    composer require codezero/encrypter

## Vanilla PHP Implementation

Autoload the vendor classes:

    require_once 'vendor/autoload.php'; // Path may vary

Choose a key. You will need the same key that was used to encrypt a string, to decrypt it.

    $key = 'my secret key';
 
And then use the `DefaultEncrypter` implementation:

    $encrypter = new \CodeZero\Encrypter\DefaultEncrypter($key);

## Usage

### Encrypt a string

    $encrypted = $encrypter->encrypt('some string');

### Decrypt an encrypted string
    
    try {
        $decrypted = $encrypter->decrypt($encrypted);
    } catch (\CodeZero\Encrypter\DecryptException $exception) {
        // Decryption failed...
    }
## Testing

    $ vendor/bin/phpspec run

## Security

If you discover any security related issues, please [e-mail me](mailto:ivan@codezero.be) instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---
[![Analytics](https://ga-beacon.appspot.com/UA-58876018-1/codezero-be/encrypter)](https://github.com/igrigorik/ga-beacon)