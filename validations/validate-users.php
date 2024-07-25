<?php

function validateUsers()
{
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $age = $_POST['age'] ?? null;

    $error = [];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        printr("$email is a valid email address");
    } else {
        $errors[] = "$email is not a valid email address";
    }

    if (filter_var(
        $password,
        FILTER_VALIDATE_REGEXP,
        ["options" => ["regexp" => "/.{8,16}/"]]
    )) {
        printr("Password {$password} is a valid ");
    } else {
        $errors[] =  ("Password {$password} is not a valid ");
    }

    if (filter_var(
        $age,
        FILTER_VALIDATE_INT,
        ["options" => ["min_range" => 10, "max_range" => 90]]
    )) {
        printr("Age {$age} is a valid ");
    } else {
        $errors[] = ("Age {$age} is not a valid ");
    }

    return $errors;
}
