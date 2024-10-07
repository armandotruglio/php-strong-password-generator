<?php
require_once __DIR__ . "/functions/function.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSWORD</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center mb-3">
        PASSWORD GENERATA
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?php
                echo ($_SESSION["password"]);
                ?>
            </div>
        </div>
    </div>

</body>

</html>