<?php

// Check if variable exists
if (!isset($argv[1])) {
    die('Hahaha jij denke dit werke zonder email dacht het niet!');
}

// Args
$email = $argv[1];

// Regex check
$regex = "/[\w]{3,64}[@]{1}[\w]{3,255}[.]{1}[a-z]{2,3}/m";
preg_match($regex, $email, $match);

// Result
if (isset($match[0]) && $match[0] === $email) {
    echo "Het ingevoerde email is: '{$email}' en dat is juist";
} else {
    echo "Het ingevoerde email is: '{$email}' en dat is onjuist";
}