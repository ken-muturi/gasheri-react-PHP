<?php

require('../utils.php');

// $id = isset($_GET['id']) ? $_GET['id'] : null;
$id = $_GET['id'] ?? null;
$email = $_GET['email'] ?? null;

printr($id);
printr($email);
