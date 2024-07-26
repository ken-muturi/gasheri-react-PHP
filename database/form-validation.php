<?php

function  formValidation () {
    $errors = [];
    $data = [];
    
    if(isset($_POST['submit'])) {

        $name = $_POST['name'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        // $data['email'] = $email;
        // $data['name'] = $name;
        // $data['password'] = $password;
        $data = $_POST;

        if (empty($email)) {
            $errors[]= "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[]= "Invalid email <strong>{$email}</strong>";
        }

        if (empty($name)) {
            $errors[]= "Name is required";
        } elseif (!preg_match("/^[a-z]([a-z-' ]+)/i", $name)) {
            $errors[]= "Only letters and white space allowed on name <strong>{$name}</strong>";
        }

        if (empty($password)) {
            $errors[]= "Password is required";
        } elseif (strlen($password) < 6) {
            $errors[]= "passwords should be greater than 6";
        }
    }

    return ['errors' => $errors, 'data' => $data];
}
