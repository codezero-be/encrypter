<?php namespace CodeZero\Encrypter;

interface Encrypter
{
    /**
     * Encrypt a string
     *
     * @param string $string
     *
     * @return string
     */
    public function encrypt($string);

    /**
     * Decrypt an encrypted string
     *
     * @param string $payload
     *
     * @return string
     * @throws DecryptException
     */
    public function decrypt($payload);
}
