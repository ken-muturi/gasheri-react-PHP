<?php
session_start();

$_SESSION['id'] = 1;
$_SESSION['email'] = "ga@shee.com";

setcookie('gasheri_id', 1);
setcookie('gasheri_email', "ga@shee.com", time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> <a href="query-strings.php?id=1&email=gashe@shee.com">query String Page</a></p>

    <p>
        <a href="parameters.php/1/gashe@shee.com">Parameters Page</a>
    </p>

    <p>
        <a href="session.php">Sessions Page</a>
    </p>
    <p>
        <a href="cookies.php">Cookie Page</a>
    </p>
</body>

</html>