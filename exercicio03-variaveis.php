<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Salário</h1>

<?php
    $salario = 300;

    if($salario = 500){
        $salario * 1.15;
    } elseif ($salario = 1000) {
        $salario * 1.10;
    } else {
        $salario * 1.05;
    }

    echo "<p>O salário é $salario</p>"
?>



</body>
</html>