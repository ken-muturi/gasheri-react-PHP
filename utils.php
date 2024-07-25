<?php
function printr($var, $dump = false)
{
    //    $print = print_r($var, true);
    //    echo $print ."<br />";
    if ($dump) {
        var_dump($var) . "<br />";
    } else {
        echo "<pre>" . print_r($var, true) . "</pre>";
    }
}

function getParameters()
{
    $request = $_SERVER['REQUEST_URI'] ?? null;
    $basepath = $_SERVER['SCRIPT_NAME'] ?? null;
    $params = str_replace($basepath, '', $request);
    return explode('/', $params);
}
