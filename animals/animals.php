<?php
require('../utils/util.php');
require('../data/animals.php');

$columns = array_keys($animals[0]);
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
    
    <h2>Animals Information</h2>

    <?php // require('./get-search.php'); ?>
    <?php // require('./post-search.php'); ?>
    <?php  require('./request-search.php'); ?>

    <?php
    // if(! empty($search) ) { 
        // $animals =  array_filter($animals, function($animal) use ($search) {
        //     return array_filter($animal, function($value) use ($search) {
        //         return strpos(strtolower($value), $search) !== false;
        //     });
        // });
    // }
    ?>

    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <?php foreach($columns as $column) : ?>
                <th><?php echo ucwords($column); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($animals as $animal): 
            
            if( strpos(strtolower($animal['species']), $search ) !== false ||
             strpos(strtolower($animal['age']), $search ) !== false || 
             strpos(strtolower($animal['breed']), $search ) !== false || 
             strpos(strtolower($animal['color']), $search ) !== false
            ) :
            ?>
            <tr>
                <?php foreach($columns as $column) : ?>
                    <td><?php echo $animal[$column]; ?></td>
                <?php endforeach; ?>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>