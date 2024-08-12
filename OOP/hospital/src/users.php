<?php

require __DIR__ . '/../vendor/autoload.php';
require 'model/db.php';
require 'api/User.php';

use Hospital\Api\User;

$user = new User();
$users = $user->get();
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo $users;
