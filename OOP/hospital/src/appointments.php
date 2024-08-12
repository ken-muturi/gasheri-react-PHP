<?php

require __DIR__ . '/../vendor/autoload.php';
require 'model/db.php';
require 'api/Appointment.php';

use Hospital\Api\Appointment;

$appointment = new Appointment();
// Util::printr($appointment);
$appointments = $appointment->get();
// Util::printr($appointments);
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo $appointments;
