<?php

require __DIR__ . '/../vendor/autoload.php';
require 'helpers/Util.php';
require 'model/db.php';
require 'api/User.php';
require 'api/Appointment.php';
require 'api/Patient.php';

use Hospital\Api\Appointment;
use Hospital\Api\Patient;
use Hospital\Api\User;
use Hospital\Helpers\Util;

$appointment = new Appointment();
// Util::printr($appointment);
$appointments = $appointment->get();
// Util::printr($appointments);
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo $appointments;

// $user = new User();
// $patient = new Patient();
// Util::printr($user->get('users'));
// Util::printr($patient->get('patients'));
