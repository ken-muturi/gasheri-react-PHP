<?php
require('../utils.php');
require('./todo.php');

$t = [
    'id' => 1,
    'title' => 'Complete homework assignment',
    'description' => 'Finish the math and science homework before Friday.',
    'created_at' => '2024-07-23 08:00:00',
    'completed_at' => null,
];

$todo = new Todo($t);
printr($todo->getAll());

$todo->add([
    'id' => 2,
    'title' => 'Buy groceries',
    'description' => 'Purchase milk, eggs, bread, and fruits.',
    'created_at' => '2024-07-23 12:30:00',
    'completed_at' => '2024-07-24 10:15:00',
]);
printr($todo->getAll());

$todo->remove(2);
printr($todo->getAll());
