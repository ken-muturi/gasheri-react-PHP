<?php
session_start();
require('../../Utils.php');
require('../Auth.php');

if (!\OOP\Login\Auth::isLoggedIn()) {
    \OOP\Utils::redirect('login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>This is my secret page</h2>
    <h2>I am logged in as :</h2>

    <?php
    $user = \OOP\Login\Auth::data();
    \OOP\Utils::printr($user);
    \OOP\Utils::printr(\OOP\Login\Auth::role());
    ?>

    <p><a href="./logout.php">Logout</a></p>

    <div><?php echo \OOP\Utils::$APPNAME; ?> <?php echo date('Y', time());  ?> <?php echo \OOP\Utils::$TERMS; ?></div>
</body>

</html>