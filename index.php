<?php

// Available characters
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?~@#-_+<>[]{}';


$generatePassword = function ($length) use ($characters) {
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        //Generate random character and push it in the string $password
        $password .= $characters[rand(0, strlen($characters))];
    }

    return $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1>
                    PASSWORD GENERATOR
                </h1>
            </div>
            <div class="col">
                <form class="bg-primary p-4" action="./index.php" method="GET">
                    <label for="password-length" class="text-light mb-3">
                        Inserisci la lunghezza della password che vuoi
                        generare
                    </label>
                    <input type="number" class="form-control" name="length" id="password-length">
                </form>
            </div>
            <div class="col-12 text-center">
                <?php
                if (isset($_GET["length"])) {
                    echo ($generatePassword($_GET["length"]));
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>