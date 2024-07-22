<?php

CONST a = 5;
// define("a", 5);

$b = 10;
$str = "some string";

$bool = true;
$arr1 = array(1, 2, 3, 4, 5, "me"); // zero index
$arr2 = [1, 2, 3, 4, 5, "me"]; // 

$arr2.push("you");
$arr1 [] = "you";

// associative arrays == objects in JS
$p = [
    "firstname" => "eve",
    "othernames" => "Njeri"
    "children" => [   
         "firstname" => "eve",
        "othernames" => "Njeri mdogo"
    ]
    ];

$p = array(
    "firstname" => "eve",
    "othernames" => "Njeri mdogo",
    "children" => array(
        "firstname" => "eve",
       "othernames" => "Njeri mdogo",
        "children" => array(
            "firstname" => "eve",
            "othernames" => "Njeri mdogo mdogo"
        )
    )
        );
    
$nil = null;