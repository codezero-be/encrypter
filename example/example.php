<?php

require_once '../vendor/autoload.php';

$key = 'secret';
$message = 'some string';

$encrypter = new CodeZero\Encrypter\DefaultEncrypter($key);

$encrypted = $encrypter->encrypt($message);

$decrypted = $encrypter->decrypt($encrypted);

echo $message . ' => ' . $encrypted . ' => ' . $decrypted;
