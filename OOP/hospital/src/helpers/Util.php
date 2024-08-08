<?php

namespace Hospital\Helpers;

class Util
{
    public static function printr($var = "")
    {
        if (is_bool($var)) {
            echo "<pre>" . var_dump($var) . "</pre>";
        } else {
            echo "<pre>" . print_r($var, 2) . "</pre>";
        }
    }
}
