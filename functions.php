<?php

function sum($a, $b) {
    return $a + $b;
}

function printr($var, $dump = false) {
//    $print = print_r($var, true);
//    echo $print ."<br />";
   if($dump) {
    var_dump($var) ."<br />";
   }
   else {
       echo print_r($var, true) ."<br />";
   }   
}

CONST a = 5;


printr(a);

$b = 10;
printr($b);

printr(sum(a, $b));

$str = "some string";
printr($str);

$bool = true;
printr($bool, true);

$arr1 = array(1, 2, 3, 4, 5, "me"); // zero index
printr($str);
$arr2 = [1, 2, 3, 4, 5, "me"]; // 
printr($str);
array_push($arr2, "you");

$arr1 [] = "you";

// associative arrays == objects in JS
$p1 = [
    "firstname" => "eve",
    "othernames" => "Njeri",
    "children" => [   
         "firstname" => "eve",
        "othernames" => "Njeri mdogo"
    ]
    ];

$p2 = array(
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


printr( $p1);
printr( $p2, true);
printr( $nil, true);