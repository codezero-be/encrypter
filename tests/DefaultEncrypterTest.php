<?php

namespace CodeZero\Encrypter\Tests;

use CodeZero\Encrypter\DecryptException;
use CodeZero\Encrypter\DefaultEncrypter;
use PHPUnit\Framework\TestCase;

class DefaultEncrypterTest extends TestCase
{
    /** @test */
    function it_encrypts_and_decrypts_a_string()
    {
        $encrypter = new DefaultEncrypter('test key');
        $encryptedString = $encrypter->encrypt('some string');
        $decryptedString = $encrypter->decrypt($encryptedString);

        $this->assertEquals('some string', $decryptedString);
    }

    /** @test */
    function it_throws_if_decryption_fails()
    {
        $this->expectException(DecryptException::class);

        $encrypter = new DefaultEncrypter('test key');
        $encrypter->decrypt('tampered string');
    }
}
