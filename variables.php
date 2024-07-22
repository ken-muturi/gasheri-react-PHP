<?php

CONST a = 5;

// console.log(a)

echo a ."<br />";
// print a;

$b = 10;
echo $b ."<br />";
$str = "some string";
echo $str ."<br />";

$bool = true;

print_r($bool); 
echo "<br />";
var_dump( $bool );
echo "<br />";

$arr1 = array(1, 2, 3, 4, 5, "me"); // zero index
print_r($arr1);  
echo "<br />";
$arr2 = [1, 2, 3, 4, 5, "me"]; // 
print_r( $arr2); 
echo "<br />";

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

echo "<br />";
print_r( $p1);
echo "<br />";
var_dump( $p2);
echo "<br />";
print_r( $nil);