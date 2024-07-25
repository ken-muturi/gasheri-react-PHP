<?php
$names = ["evah", "joe", "jaiden", "james","karen","rahab","johnson"];
print_r($names);
echo "<br />";

$names[] = "sophia";
print_r($names);
echo "<br />";

array_push($names,"michael");
print_r($names);
echo "<br />";

$names[2] = "sophi";
print_r($names);
echo "<br />";

unset($names[2]);
print_r($names);
echo "<br />";


krsort($names);
foreach($names as $k => $name) {
    echo $k ." ". $name ."<br/>";
};
  
shuffle($names);
print_r($names);

print_r(array_chunk($names,3));

echo "<br />";
$names[5] = "njee";
print_r($names);
echo "<br />";




