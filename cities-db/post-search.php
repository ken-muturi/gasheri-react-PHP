<?php


$search = strtolower(isset($_POST['q']) ? $_POST['q'] : '');
?>

<form method="POST" class="mb-3" action="./index.php">
    <input class="form-control" value="<?php echo $search; ?>" name="q" placeholder="Type to search...">
</form>