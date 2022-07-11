<?php setcookie("visitado","S");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem-vindo a esta página!</h1>

    <?php
    if(isset($_COOKIE["visitado"])) {
        echo ("Você já visitou esta página antes!");
    }
    ?>
</body>
</html>

