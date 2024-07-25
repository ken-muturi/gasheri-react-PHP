<?php
session_start();

require('../utils/util.php');
require('./users.php');

if(isset($_POST['email']) && isset($_POST['password'])) {
    $password = strtolower(trim($_POST['password']));
    $email = strtolower(trim($_POST['email']));
    $filteredUsers =  array_filter($users, function($u) use ($password, $email) {
        return strtolower($u['email']) === $email && strtolower($u['password']) === $password;
    });

    if( count($filteredUsers)) {

        // $user = [
        //     'firstname' =>  $filteredUsers[0]['firstaname'],
        //     'lastname' =>  $filteredUsers[0]['lastname'],
        //     'email' =>  $filteredUsers[0]['email'],
        //     'age' =>  $filteredUsers[0]['email']
        // ]

        $user = $filteredUsers[0];
        unset($user['password']);
        $_SESSION['user'] = [...$user, 'role'=> 'admin' ];
        $_SESSION['loggedIn'] = true;

        header('Location: ./secure.php');
        exit();

    }
    else {
        printr("there arre not users");
    }
}
else {
    $_SESSION = [];
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> animals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


<div class="container">
    
    <h2>Login</h2>

    <form method="POST" action ="index.php">
        <p>
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" />
        </p>
        <p>
            <label>Password</label>
            <input type="password" name="password"  class="form-control" />
        </p>
        <p>
            <input type="submit" name="login" class="btn btn-primary" value="Login" />
        </p>
    </form>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>