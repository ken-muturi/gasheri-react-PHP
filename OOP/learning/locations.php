<?php
require("./Utils.php");
require("./City.php");
require("./CapitalCity.php");

use \OOP\Utils;

$tokyo = new City("tokyo", "japan");
Utils::printr($tokyo->getName());
Utils::printr($tokyo->getCountry());

$Beijing = new City("Beijing", "china");
Utils::printr($Beijing->getName());
Utils::printr($Beijing->getCountry());

$Moscow = new City("Moscow", "Russia");
Utils::printr($Moscow->getName());
Utils::printr($Moscow->getCountry());

$Dubai = new City("Dubai", "UAE");
Utils::printr($Dubai->getName());
Utils::printr($Dubai->getCountry());


$cities = [
    ['name' => 'Rio de Janeiro', 'country' => 'Brazil'],
    ['name' => 'Paris', 'country' => 'France'],
    ['name' => 'New York', 'country' => 'USA'],
    ['name' => 'Sydney', 'country' => 'Australia']
];

foreach ($cities as $city) {
    echo "City: " . $city['name'] . ", Country: " . $city['country'] . "<br>";
}
$sydney = new CapitalCity("Sydney", "Australia", true);
Utils::printr($sydney->hasBeaches());
