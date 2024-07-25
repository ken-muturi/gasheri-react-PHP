<?php
if (5 > 3) {
    echo "true";
}

function division($a, $b) {
    if ($b == 0) {
        echo "not possible";
        return 0;
    } else {
        return $a / $b;
    }
}

echo division(10, 2);
echo "<br />";  
print_r(5, 0); 

$names = ["evah", "joe", "jaiden", "james","karen","rahab","johnson", ["xyz", 'box']];
$names1 = [0 => "evah", 1=> "joe", 5=> "jaiden", 3=>"james", 4=>"karen", 3=>"rahab", 6=>"johnson"];
$fullnames = [
    "firstaname" => "joe", 
    "lastname" => "johnson", 
    "children" => [
        "firstaname" => "jane",
        "lastname" => "doe",
       "children"  => [
        "firstaname" => "jane",
        "lastname" => "doe",
    ]
    ]
];

$names += $names1;
array_merge($names, $names1);





echo "<br />";
print_r($names);

for ($i = 0; $i < 6; $i++) {
    echo $names[$i] ."<br/>";
  }


  foreach($names as $k => $name) {
    echo $k ." ". $name ."<br/>";
  }

  foreach($fullnames as $type => $name) {
    if(is_array($name)) {
        echo " Children are: <br/>";
        foreach($name as $k => $v) {
            echo $k . " ". $v ."<br/>";
        }
    }
    else {

        echo $type ." ". $name ."<br/>";
    }
  }


$names[0];
$names[6];


$length = count($names);

$length - 1;

$names[ $length - 1 ];

end($names);


$names [] = 'big boy';

unset($names[5]);
$fullnames['firstname'];
if(isset($fullnames['firstname'])) {
    unset($fullnames['firstname']);
}

unset($fullnames['children']);

ksort($fullnames);
sort($names);
ksort($names1);

$fullnames['firstname'] = 'eeee';
