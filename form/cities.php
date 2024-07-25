<?php
require('../utils/util.php');
require('../data/cities.php');


$columns = array_keys($cities[0]);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Cities</title>
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
    
    <h2>Cities Information</h2>

    <?php  require('./post-search.php'); ?>

    <table class="table table-danger table-striped">
        <thead>
            <tr>
                <?php foreach($columns as $column) : ?>
                <th><?php echo ucwords($column); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cities as $city): 
            
            if( strpos(strtolower($city['name']), $search ) !== false ||
             strpos(strtolower($city['country']), $search ) !== false || 
             strpos(strtolower($city['population']), $search ) !== false || 
             strpos(strtolower($city['famous_for']), $search ) !== false
            ) :
            ?>
            <tr>
                <?php foreach($columns as $column) : ?>
                    <td><?php echo $city[$column]; ?></td>
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