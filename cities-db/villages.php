<?php
require('../utils/util.php');
require('../utils/db.php');

$conn = dbConnect('sais');
$sql = "
SELECT  p.firstname, a.* 
FROM appointment a 
INNER JOIN patients p on p.id = a.patient_id 
limit 50";
$villages = dbQuery($conn, $sql);

printr($villages);
