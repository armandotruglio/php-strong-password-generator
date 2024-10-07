<?php

// Available characters
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?~@#-_+<>[]{}';


$generatePassword = function ($length) use ($characters) {
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        //Generate random character and push it in the string $password
        $password .= $characters[rand(0, strlen($characters))];
    }

    return $password;
};