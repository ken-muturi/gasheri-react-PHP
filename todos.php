<?php

require('./utils/util.php');
require('./data/todos.php');


// Sort the $todos array using usort() with the custom function
usort($todos, function ($a, $b) {
    return strtotime($b['created_at']) - strtotime($a['created_at']);
});

// printr($todos);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container my-4">
        <ul class="list-group">
        <?php 
        if(isset($todos)) :
            foreach($todos as $todo ) :?>
                <li class="list-group-item <?php echo $todo['completed_at'] ? 'list-group-item-secondary' : '' ?>">
                    <div>
                        <h4><?php echo $todo['title']; ?></h4>
                        <div class="fs-6"><?php echo $todo['description']; ?></div>
                        <div class="fs-6"><?php echo $todo['created_at']; ?></div>
                    </div>
                </li>
                
            <?php  
            endforeach;      
        endif; ?>
        </ul>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>