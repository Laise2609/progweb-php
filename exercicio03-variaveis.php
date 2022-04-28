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
    $salario = 1000;

    echo "<p>O salário antigo era $salario</p>";

    if($salario < 500){
        $salarioAtual = ($salario * 1.15);
    } elseif ($salario <= 1000) {
        $salarioAtual = ($salario * 1.10);
    } else {
        $salarioAtual = ($salario * 1.05);
    }
    
    $salarioAtual = number_format($salarioAtual, 2, ",", ".");

    echo "<p>O salario atual é $salarioAtual</p>";
?>


</body>
</html>