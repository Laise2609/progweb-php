<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>

    <style>
        .aprovado {background-color: greenyellow;}
        .recuperacao {background-color: orange;}
        .reprovado {background-color: red}

    </style>

</head>
<body>
    <h1>Condicionais</h1>    
    <hr>

<?php
    $numero = 5;
    $numerob = 1;

    if($numero > $numerob){
?>
        <p><?=$numero?> é maior que <?=$numerob?></p>
<?php } ?>

    <h2>Condicionais compostas</h2>

<?php
    $nota1 = 6;
    $nota2 = 6;
    $media = ($nota1 + $nota2) / 2;
?>

    <p>Média: <?=$media?></p>

<?php    
    if($media > 7){?>
        <p>Aprovado</p>
<?php } else { ?>        
        <p>Reprovado</p>
<?php } ?>

    <h2>Condicionais encadeadas</h2>

<?php
    if($media >= 7){ ?>
        <p class='aprovado'>Aprovado</p>
<?php    } elseif (($media >=6) && ($media < 7)){?>
        <p class='recuperacao'>Recuperação</p>
<?php    } else { ?>
        <p class='reprovado'>Reprovado</p>
<?php    } ?>

    <h2>Switch/case</h2>

<?php
    $opcao = 5;

    switch($opcao){
        case 1: $assunto = "<p>Reclamação</p>"; break;
        case 2: $assunto = "<p>Elogio</p>"; break;
        case 3: $assunto = "<p>Informações</p>"; break;
        default: $assunto = "<p>Falar com um humano</p>"; break;
    }
?>

    <p><?=$assunto?></p>


</body>
</html>