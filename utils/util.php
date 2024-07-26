<?php

function printr($var = "")
{
    if(is_bool($var))
    {
        echo "<pre>". var_dump($var) . "</pre>";
    }
    else 
    {
        echo "<pre>". print_r($var, 2) . "</pre>";
    }
}



function logout() {
    $_SESSION = [];
    session_unset(); 
    session_destroy();
    header('Location: ./index.php');
    die();
}

function isLoggedIn() {
    return isset($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : null;
}


function getUser() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : null;
}


function hasAccess() {
    $isLoggedIn = isset($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : null;

    printr($_SESSION);
    printr($isLoggedIn);
    if(! $isLoggedIn) {
        header('Location: ./index.php');
        exit();
    }
}