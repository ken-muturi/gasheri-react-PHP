<?php


$search = strtolower(isset($_GET['q']) ? $_GET['q'] : '');
?>
<form method="GET" class="mb-3" action="animals.php">
    <input class="form-control" value="<?php echo $search; ?>" name="q" placeholder="Type to search...">
</form>
