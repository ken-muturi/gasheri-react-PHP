<?php

namespace OOP\Login;

session_start();
require('../Utils.php');
require('./Db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'] ?? 1;

    // $sql = "SELECT * FROM users where id = {$id};";
    $user = Db::find($conn, 'users', $id);
    // Utils::printr($users);

    // $user = [
    //     'username' => 'eve.njeri',
    //     'username_hash' => sha1('eve.njeri'),
    //     'firstname' => 'eve',
    //     'othernames' => 'njeri',
    //     'email' => 'njeri@example.com',
    //     'password' => 'njeri.kamande',
    //     'role_id' => 2,
    // ];
    // $result = Db::insertData($conn, $table, $user);

    if ($user) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['user'] = $users[0];

        \OOP\Utils::redirect('./secret/index');
    } else {
        \OOP\Utils::printr("could not loggin");
    }
} ?>
<form action="./index.php">
    <input name="id" type="numeric" />
    <input type="submit" value="login">
</form>