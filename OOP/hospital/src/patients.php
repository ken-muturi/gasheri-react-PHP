<?php

require __DIR__ . '/../vendor/autoload.php';
require 'model/db.php';
require 'api/Patient.php';

use Hospital\Api\Patient;

$patient = new Patient();
$patients = $patient->get();
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo $patients;
