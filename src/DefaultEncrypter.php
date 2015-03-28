<?php namespace CodeZero\Encrypter;

use Illuminate\Contracts\Encryption\DecryptException as IlluminateDecryptException;
use Illuminate\Contracts\Encryption\Encrypter as IlluminateEncrypter;
use Illuminate\Encryption\Encrypter as DefaultIlluminateEncrypter;

class DefaultEncrypter implements Encrypter
{
    /**
     * Laravel's Encrypter
     *
     * @var IlluminateEncrypter
     */
    private $encrypter;

    /**
     * Create a new instance of LaravelEncrypter
     *
     * @param string $key
     * @param IlluminateEncrypter $encrypter
     */
    public function __construct($key, IlluminateEncrypter $encrypter = null)
    {
        $this->encrypter = $encrypter ?: new DefaultIlluminateEncrypter(md5($key));
    }

    /**
     * Encrypt a string
     *
     * @param string $string
     *
     * @return string
     */
    public function encrypt($string)
    {
        return $this->encrypter->encrypt($string);
    }

    /**
     * Decrypt an encrypted string
     *
     * @param string $payload
     *
     * @return string
     * @throws DecryptException
     */
    public function decrypt($payload)
    {
        try {
            $decrypted = $this->encrypter->decrypt($payload);
        } catch (IlluminateDecryptException $exception) {
            throw new DecryptException('Decryption failed.', 0, $exception);
        }

        return $decrypted;
    }
}
