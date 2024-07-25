<?php
session_start();
require('../utils.php');


printr($_SESSION);

$id = $_SESSION['id'] ?? null;
$email = $_SESSION['email'] ?? null;

printr($email);
printr($id);
