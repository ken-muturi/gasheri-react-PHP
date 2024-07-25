<?php
session_start();
require('../utils.php');

printr($_COOKIE);

$id = $_COOKIE['gasheri_id'] ?? null;
$email = $_COOKIE['gasheri_email'] ?? null;

printr($email);
printr($id);
