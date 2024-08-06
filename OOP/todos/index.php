<?php

require('./Db.php');
require('./Utils.php');

// use OOP\TODOS;

$sql = "
SELECT t.*, c.title as category, CONCAT_WS(' ', u.firstname, u.lastname) as user
FROM todos t
INNER JOIN categories c on c.id = t.category_id
INNER JOIN users u on u.id = t.user_id
";
$todos = OOP\TODOS\Db::select($conn, $sql);

// OOP\TODOS\Utils::printr($todos);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Todo</th>
                <th>Category</th>
                <th>User</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todos as $index => $todo) : ?>
                <tr>
                    <td><?php echo ++$index; ?></td>
                    <td><?php echo $todo['title']; ?></td>
                    <td><?php echo $todo['category']; ?></td>
                    <td><?php echo $todo['user']; ?></td>
                    <td><?php echo $todo['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>