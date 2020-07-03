<?php

// Check if variable exists
if (!isset($argv[1])) {
    die('Hahaha jij denke dit werke zonder email dacht het niet!');
}

// Args
$email = $argv[1];

$pattern = '/[\w]{3,64}[@]{1}[\w]{3,255}[.]{1}[a-z]{2,3}/m';

// Result
if (preg_match($pattern, $email)) {
    echo "Het ingevoerde email is: '{$email}' en dat is juist";
} else {
    echo "Het ingevoerde email is: '{$email}' en dat is onjuist";
}