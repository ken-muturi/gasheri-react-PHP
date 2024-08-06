<?php
                                                                    require('./Utils.php');
                                                                    require('./FormValidation.php');

$validation = new FormValidation();
$validationDetails = $validation->validate();

// $errors = $validationDetails['errors'];
// $data = $validationDetails['data'];
list($errors, $data) = array_values($validationDetails);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php
        if (count($errors)) :
            foreach ($errors as $error) : ?>
                <p><?php echo $error; ?></p>
            <?php
            endforeach; ?>
        <?php endif; ?>

        <form method="POST" action="form.php">
            <p>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $data['name'] ?? ''; ?>">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $data['email'] ?? ''; ?>">
            </p>
            <p>
                <label for="email">Password:</label>
                <input type="password" id="password" name="password">
            </p>
            <p>
                <input type="submit" name="submit" value="submit">
            </p>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>