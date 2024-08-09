<?php

require __DIR__ . '/../vendor/autoload.php';

require 'helpers/Util.php';
require 'model/db.php';
require 'Api/Student.php';
require 'api/Subject.php';
require 'api/Teacher.php';

use Class\Api\Student;
use Class\Api\Subject;
use Class\Api\Teacher;
use Class\Helpers\Util;


$student = new Student();
// $student->seed(10);

// $students = json_decode($student->get(), 1);
// Util::printr(count($students));

Util::printr($student->get());


// $newStudent = [
//     'name' => $faker->name(),
//     'date_of_birth' => $faker->date(),
//     'email' => $faker->email(),
//     'phone_number' => $faker->e164PhoneNumber(),
// ];

// $student->insert($newStudent);

//  $subject = new Subject();
//  $subject->seed(10);
//  $subjects = json_decode($subject->get(), 1);
//  Util::printr(count($subjects));
  

//  $teacher = new Teacher();
//  $teacher->seed(10);
// $teachers = json_decode($teacher->get(), 1);
// Util::printr(count($teachers));
 


