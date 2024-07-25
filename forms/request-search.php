<?php


$search = strtolower(isset($_REQUEST['q']) ? $_REQUEST['q'] : '');
?>

<form method="GET" class="mb-3" action="animals.php">
    <input class="form-control" value="<?php echo $search; ?>" name="q" placeholder="Type to search...">
</form>