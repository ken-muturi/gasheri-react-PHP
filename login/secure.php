<?php
session_start();

require('../utils/util.php');
require('./users.php');

hasAccess();

$user = getUser();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>I am on the secure page</h1>
<?php printr($user); ?>
<div><a href="secure-2.php">Secure 2 Page </a> </div>
<a href="logout.php">Logout </a>
    
</body>
</html>