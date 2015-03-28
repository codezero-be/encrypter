<?php namespace spec\CodeZero\Encrypter;

use Illuminate\Contracts\Encryption\Encrypter as IlluminateEncrypter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DefaultEncrypterSpec extends ObjectBehavior
{
    function let(IlluminateEncrypter $encrypter)
    {
        $this->beConstructedWith(null, $encrypter);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('CodeZero\Encrypter\DefaultEncrypter');
    }

    function it_encrypts_a_string(IlluminateEncrypter $encrypter)
    {
        $encrypter->encrypt('some string')->shouldBeCalled()->willReturn('encrypted string');
        $this->encrypt('some string')->shouldReturn('encrypted string');
    }

    function it_decrypts_a_string(IlluminateEncrypter $encrypter)
    {
        $encrypter->decrypt('encrypted string')->shouldBeCalled()->willReturn('some string');
        $this->decrypt('encrypted string')->shouldReturn('some string');
    }

    function it_throws_if_decryption_fails(IlluminateEncrypter $encrypter)
    {
        $encrypter->decrypt('tampered string')->shouldBeCalled()->willThrow('Illuminate\Contracts\Encryption\DecryptException');
        $this->shouldThrow('CodeZero\Encrypter\DecryptException')->duringDecrypt('tampered string');
    }
}
