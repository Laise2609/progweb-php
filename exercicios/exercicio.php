<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Laise</title>
</head>
<body> 

<?php
    $data = date ("d/m/Y");
    define ("NOME", "Jonas");
    $idade = date("Y") - 2003;
    define ("CIDADE", "São Paulo");
?>
    <p>Hoje é dia <?=$data?>. <?=NOME?> tem <?=$idade?> anos de idade e nasceu em <?=CIDADE?> </p>

</body>
</html>


