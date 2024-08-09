<?php

namespace OOP\Login;

class Auth
{
    public static function data()
    {
        if (Auth::isLoggedIn()) {
            if (isset($_SESSION['user']) && count(($_SESSION['user'])) && $_SESSION['user']) {
                return $_SESSION['user'];
            }
            return ["error" => "user not found !"];
        } else {
            return ["error" => "user not logged in"];
        }
    }

    public static function role()
    {
        // $ret = self::data($userId);
        $ret = Auth::data();
        if (isset($ret['error'])) {
            return false;
        } else {
            return $ret['role_id']  == 1 ? 'Admin'  : 'User';
        }
    }

    public static function isLoggedIn()
    {
        return $_SESSION['loggedIn'] ?? false;
    }

    public static  function logout()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();
        header('Location: ./index.php');
        die();
    }
}
