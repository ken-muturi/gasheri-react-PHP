<?php

use Hospital\Api\Appointment;
use Hospital\Api\Patient;
use Hospital\Api\User;
use Hospital\Helpers\Util;
use Hospital\Helpers\Validation;

require __DIR__ . '/../vendor/autoload.php';
require 'helpers/Util.php';
require 'helpers/Validations.php';
require 'model/db.php';
require 'api/User.php';
require 'api/Appointment.php';
require 'api/Patient.php';

$validation = new Validation();
$appointment = new Appointment();
// Util::printr($appointment);
$appointments = json_decode($appointment->get(), 1);
Util::printr($appointments);

// $user = new User();
// $patient = new Patient();
// Util::printr($user->get('users'));
// Util::printr($patient->get('patients'));
