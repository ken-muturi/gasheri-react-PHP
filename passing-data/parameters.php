<?php

require('../utils.php');

$parameters = getParameters();
printr($parameters);
// printr($_SERVER);

// $id = $parameters[1];
// $email = $parameters[2];

list(, $first, $second) = $parameters;
printr($first);
printr($second);
