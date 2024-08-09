<?php

namespace OOP;

class Utils
{
    public static $APPNAME = "&copy; ";
    public static $TERMS = "Consulting. All rights reserved";

    public static function printr($var = "")
    {
        if (is_bool($var)) {
            echo "<pre>" . var_dump($var) . "</pre>";
        } else {
            echo "<pre>" . print_r($var, 2) . "</pre>";
        }
    }

    public static function redirect($str)
    {
        header("Location: ./{$str}.php");
        exit();
    }
}
